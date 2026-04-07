#!/bin/bash
# Copyright 2026 Emilian Scibisz
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
# session_create_pre hook for Cloudflare Turnstile verification
# Checks if the connecting IP has a valid Turnstile verification token
# Exit 0 = allow login, Exit non-zero = block login

CONF="/usr/local/directadmin/plugins/turnstile/conf/turnstile.conf"
VERIFY_DIR="/tmp/da_turnstile"

# Read config
if [ ! -f "$CONF" ]; then
    exit 0
fi

ENABLED=$(grep "^ENABLED=" "$CONF" 2>/dev/null | cut -d= -f2 | xargs)
TOKEN_TTL=$(grep "^TOKEN_TTL=" "$CONF" 2>/dev/null | cut -d= -f2 | xargs)
FAIL_OPEN=$(grep "^FAIL_OPEN=" "$CONF" 2>/dev/null | cut -d= -f2 | xargs)

TOKEN_TTL=${TOKEN_TTL:-300}
FAIL_OPEN=${FAIL_OPEN:-yes}

if [ "$ENABLED" != "yes" ]; then
    exit 0
fi

USER_IP="${ip}"
if [ -z "$USER_IP" ]; then
    [ "$FAIL_OPEN" = "yes" ] && exit 0
    exit 1
fi

IP_HASH=$(echo -n "$USER_IP" | sha256sum | cut -d" " -f1)
VERIFY_FILE="${VERIFY_DIR}/${IP_HASH}"

if [ ! -f "$VERIFY_FILE" ]; then
    if [ "$FAIL_OPEN" = "yes" ]; then
        [ ! -d "$VERIFY_DIR" ] || [ -z "$(ls -A "$VERIFY_DIR" 2>/dev/null)" ] && exit 0
    fi
    echo "Turnstile: no verification found for IP ${USER_IP}" >&2
    exit 1
fi

FILE_TIME=$(stat -c %Y "$VERIFY_FILE" 2>/dev/null || stat -f %m "$VERIFY_FILE" 2>/dev/null)
NOW=$(date +%s)
AGE=$((NOW - FILE_TIME))

if [ "$AGE" -gt "$TOKEN_TTL" ]; then
    rm -f "$VERIFY_FILE"
    echo "Turnstile: verification expired for IP ${USER_IP} (age: ${AGE}s)" >&2
    [ "$FAIL_OPEN" = "yes" ] && exit 0
    exit 1
fi

rm -f "$VERIFY_FILE"
exit 0

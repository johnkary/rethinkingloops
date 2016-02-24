#!/bin/bash

DIR="$( cd "$( dirname "$0" )" && pwd)"

cat ${DIR}/friends.txt | awk 'length($0)<6' | xargs -L1 echo "Hello"

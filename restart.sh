#!/usr/bin/env bash
php public/index.php stop
php public/index.php start >>/dev/null 2>&1 &

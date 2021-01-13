#!/bin/sh
set -e

(git push) || true

git checkout -B production
git pull origin develop
git push origin production
git checkout develop
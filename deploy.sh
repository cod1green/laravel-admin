#!/bin/sh
set -e

(git push) || true

git checkout production
git remote update
git rebase origin/master
git push origin production --force-with-lease
git checkout master

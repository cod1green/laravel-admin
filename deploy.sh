#!/bin/sh
set -e

(git push) || true

git checkout production
git pull origin master
git push origin production
git checkout master
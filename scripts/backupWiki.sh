#!/bin/bash
datadir=/home/yuan/swiki/data/
set -x

cd $datadir
rm $datadir/*
mysqldump -uroot -pjizhijulebu swarma > $datadir/swarma.sql
gzip $datadir/swarma.sql
git add *.gz
git commit -m $(date +%Y%m%d)_wiki_data_backup
git push


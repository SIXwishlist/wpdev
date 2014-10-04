#!/bin/bash
 
USER="urbanleg_biz"
PASSWORD="hunkydory1971!biz"
OUTPUT="/home/urbanleg/backups/UL"
 
#rm "$OUTPUTDIR/*gz" > /dev/null 2>&1
 
databases=`mysql --user=$USER --password=$PASSWORD -e "SHOW DATABASES;" | tr -d "| " | grep -v Database`
 
for db in $databases; do
    if [[ "$db" != "information_schema" ]] && [[ "$db" != _* ]] ; then
        #echo "Dumping database: $db"
        mysqldump -h sql.byetgost9.org --user=$USER --password=$PASSWORD --databases $db > $OUTPUT/`date +%Y%m%d`.$db.sql
        gzip $OUTPUT/`date +%Y%m%d`.$db.sql
    fi
done
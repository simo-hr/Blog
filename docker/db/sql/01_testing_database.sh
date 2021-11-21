#!/bin/sh

echo "CREATE DATABASE IF NOT EXISTS \`blog_testing\` ;" | "${mysql[@]}"
echo "GRANT ALL ON \`blog_testing\`.* TO '"$MYSQL_USER"'@'%' ;" | "${mysql[@]}"
echo 'FLUSH PRIVILEGES ;' | "${mysql[@]}"
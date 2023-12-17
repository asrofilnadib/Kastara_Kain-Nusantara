if [ ! -d "/var/www/html/storage/app" ]; then
    if [ ! -d "/var/www/html/storage_" ]; then
        echo "Could not find storage dir to copy to volume"
        exit 1
    else
      cp -r /var/www/html/storage_/. /var/www/html/storage
      rm -rf /var/www/html/storage_
    fi
fi

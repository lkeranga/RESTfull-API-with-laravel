## Laravel 5.6 API simple CRUD

This project has used the crud generator and laravel auth to make the authentication

- [crud generator](https://github.com/appzcoder/crud-generator).


## store value format

send valeu to "artical" route

[
{

"title": "Anewarticle",
"auth_id": "1",
"summary": "Some content...",
"url": "/article/1",
},
{
"title": "Anewarticle",
"auth_id": "2",
"summary": "Some content...",
"url": "/article/2",
}
]

## show value format

artical?id=1

{
"id": 2,
"title": "Anewarticle",
"author": 1,
"content": "All the Content",
"url": "/article/1",
"created_at": "2017-03-20"
}

## backup DB

run the backup.sh file to backup the DB. change the configaration in the backup.sh file "USER", "PASSWORD" and "OUTPUT"

- [backup to dropbox](http://danieldvork.in/script-for-mysql-backup-to-dropbox/).
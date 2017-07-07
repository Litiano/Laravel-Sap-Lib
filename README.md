# Lib para conectar com SAP via DI-API

## Instruções
### Adicionar as seguintes configurações em seu arquivo .env
* SAP_DB_SERVER_TYPE<br>
. dst_MSSQL = 1<br>
. dst_DB_2 = 2<br>
. dst_SYBASE = 3<br>
. dst_MSSQL2005 = 4<br>
. dst_MAXDB = 5<br>
. dst_MSSQL2008 = 6<br>
. dst_MSSQL2012 = 7<br>
* SAP_SERVER_ADDRESS
* SAP_DB_NAME
* SAP_LICENSE_SERVER
* SAP_USER
* SAP_PASSWORD
* SAP_SQL_PORT
* SAP_DB_USER
* SAP_DB_PASSWORD
* SAP_DB_HOST
* SAP_LANGUAGE=29 #Português Brasil - 

### Adicionar o seguinte serviceProvider
* Litiano\Sap\SapServiceProvider::class

### Rodar os comandos
* php artisan config:clear
* php artisan cache:clear
* php artisan vendor:publish
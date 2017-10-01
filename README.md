# Laravel Package para conectar com SAP via DI-API

## Instruções
### Adicionar as seguintes configurações em seu arquivo .env

\#\# SAP CONFIG ##<br>
SAP_DB_TYPE=<br>
\#dst_MSSQL = 1<br>
\#dst_DB_2 = 2<br>
\#dst_SYBASE = 3<br>
\#dst_MSSQL2005 = 4<br>
\#dst_MAXDB = 5<br>
\#dst_MSSQL2008 = 6<br>
\#dst_MSSQL2012 = 7<br>
SAP_DB_DATABASE=<br>
SAP_DB_USERNAME=<br>
SAP_DB_PASSWORD=<br>
SAP_DB_HOST=<br>
SAP_DB_PORT=<br>
SAP_SERVER_ADDRESS=<br>
SAP_LICENSE_SERVER=<br>
SAP_USERNAME=<br>
SAP_PASSWORD=<br>
SAP_LANGUAGE=29 #Português Brasil - 

### Adicionar o seguinte serviceProvider (somente Laravel <= 5.4)
* Litiano\Sap\SapServiceProvider::class

### Rodar os comandos
* php artisan config:clear
* php artisan cache:clear
* php artisan vendor:publish
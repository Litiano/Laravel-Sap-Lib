# Laravel Package para conectar com SAP via DI-API

## Instruções
### Adicionar as seguintes configurações em seu arquivo .env
### Verificar System Landscape Directory SERVER:40000
\#\# SAP CONFIG ##<br/>
#### Obrigatórios
SAP_SERVER_ADDRESS="HOST" ou "HOST\\\SQL_INSTANCE(se for nomeada)"<br/>
SAP_USERNAME=<br/>
SAP_PASSWORD=<br/>
SAP_DB_TYPE=<br/>
\#dst_MSSQL = 1<br/>
\#dst_DB_2 = 2<br/>
\#dst_SYBASE = 3<br/>
\#dst_MSSQL2005 = 4<br/>
\#dst_MAXDB = 5<br/>
\#dst_MSSQL2008 = 6<br/>
\#dst_MSSQL2012 = 7<br/>
\#dst_MSSQL2014 = 8<br/>
\#dst_HANADB = 9<br/>
\#dst_MSSQL2016 = 10<br/>
SAP_DB_DATABASE=<br/>
SAP_DB_USERNAME=<br/>
SAP_DB_PASSWORD=<br/>
SAP_DB_HOST="HOST" ou "HOST\\\SQL_INSTANCE(se for nomeada)"<br/>
#### Opcionais
SAP_DB_PORT=<br/>
SAP_USE_ODBC_DRIVER=false<br/>
SAP_ODBC_DATA_SOURCE=<br/>
SAP_LICENSE_SERVER=<br/>
SAP_SLD_SERVER=<br/>
SAP_LANGUAGE=29 #Português Brasil<br/>
SAP_DB_DRIVER=<br/>
SAP_DEBUG=<br/>

### Adicionar o seguinte serviceProvider (somente Laravel <= 5.4)
* Litiano\Sap\SapServiceProvider::class

### Rodar os comandos
* php artisan config:clear
* php artisan cache:clear
* php artisan vendor:publish

### Recomendações
* Executar artisan schedule:run com usuário "Sistema" e/ou com privilégios de administrador


### Problemas conhecidos
* -10: - Não foi possível encontrar o nome do recurso especificado no arquivo de imagem.
Solução: Abra a conexão com SAP antes de qualquer conexão com SQLSRV (direta ou ODBC) e execute como administrador;
Solução2: primeiro use o método AuthenticateUser, depois Connect;
Solução3: Usar conexão ODBC se tiver erros de conexão com sqlsrv ou DIAPI: 
Driver: SQL Server Native Client 11.0 - funcionou
Driver: SQL Server - não funcionou
Driver: ODBC Driver 11 for SQL Server - não funcionou
Driver: ODBC Driver 13 for SQL Server - não funcionou

* Gerenciador ODBC 32 Bits C:\Windows\SysWOW64\odbcad32.exe

* -10: - The specified resource name cannot be found in the image file.

* Possivel solução 4 (SAP 9.2 PL >= 5)
Usar somente SLDServer ao invés de LicenseServer.
Observer a tag name="SLDAddress" no arquivo:
C:\Program Files (x86)\SAP\SAP Business One DI API\Conf\b1-local-machine.xml
O valor do mesmo pode variar entre 30010 e 40000
 
* Melhor solução do erro -10:
Usar DI-API x64, com PHP x64.

# FirmwareUpdaterLaravel

> Esta Api funciona como um mediador de atualizações automáticas de Firmwares de roteadores. Um roteador com sistema linux capaz de fazer download de arquivos e armazenar conteúdo temporário em memória pode ser utilizado.

### Ajustes e melhorias

O projeto ainda está em desenvolvimento e as próximas atualizações serão voltadas nas seguintes tarefas:
- [X] Autenticação com JWT


## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:

* Você instalou a versão mais recente de `laravel`

## 🚀 Instalando FirmwareUpdaterLaravel

Para instalar o FirmwareUpdaterLaravel, siga estas etapas:

Instale todas as dependêcias
```
composer install
```

Migre o banco de dados
```
php artisan migrate
```
Após isso é só popular o banco de dados com as informações desejadas

## ☕ Usando FirmwareUpdaterLaravel

Para usar FirmwareUpdaterLaravel, siga estas etapas:

Se já fez a configuração é so rodar
```
php artisan serve
```
## Acessos
GET 1-{domain:port}/getVersion/\<token\><br>
  Retorna JSON no formato: 
```
  {   data: { version_Name   :   <Firmware_name>   }
  ```
  GET 2-{domain:port}/getUpdate/\<token\>/\<firmwareVersion\><br>
  ```
 Retorna arquivo para download
  ```
  
  
[⬆ Voltar ao topo](#FirmwareUpdaterLaravel)<br>

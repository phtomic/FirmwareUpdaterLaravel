# FirmwareUpdaterLaravel

> Este front-end é feito para sincronizar dois ou mais players de vídeos conectados via socket

### Ajustes e melhorias

O projeto ainda está em desenvolvimento e as próximas atualizações serão voltadas nas seguintes tarefas:
- [X] MultiHosts (Permitir para ambos os usuários controlarem o servidor)

## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:

* Você instalou a versão mais recente de `laravel`

## 🚀 Instalando FirmwareUpdaterLaravel

Para instalar o RCTVideoSync, siga estas etapas:

Instale todas as dependêcias
```
composer install
```

Instale as dependências do Backend-socketIO também

## ☕ Usando FirmwareUpdaterLaravel

Para usar RCTVideoSync, siga estas etapas:

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
  
  
[⬆ Voltar ao topo](#RCTVideoSync)<br>

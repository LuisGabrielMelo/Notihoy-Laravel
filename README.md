# NotiHoy Laravel 


## Stack

- Laravel 8
- Vue + VueRouter + Vuex + VueI18n + ESlint
- Desacoplado front y back
- Autenticación con JWT
- Integración con Socialite

## Instalación

- Clonar el repositorio `git clone git@github.com:LuisGabrielMelo/notihoylaravel.git`
- Edita `.env` con la conexión a la base de datos
- `php artisan key:generate` y `php artisan jwt:secret`
- `php artisan migrate`
- `npm install`

## Uso

#### Entorno de desarrollo

```bash
# Corre el front y cada cambio se recompila
npm run watch
```


#### Entorno de producción

```bash
# Compila assets para poder subir a producción
npm run production
```

## Testing

```bash
# Corre los tests unitarios
vendor/bin/phpunit
```

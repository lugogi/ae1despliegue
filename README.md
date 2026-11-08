# Juego del Ahorcado

Versión en PHP del juego del ahorcado. Hay que adivinar una palabra secreta letra a letra.

## Cómo se juega

1. Abre `index.php` en el navegador.
2. Escribe una letra y pulsa **Adivinar**.
3. Si la letra está en la palabra, aparece en su posición. Si no está, pierdes una vida.
4. Empiezas con 6 vidas y no puedes repetir una letra.
5. Si descubres la palabra, se abre la página de victoria. Si te quedas sin vidas, se abre la página de derrota.
6. En esas páginas, el botón **Jugar de nuevo** vuelve a empezar la partida.

## Cómo probarlo en local

Desde esta carpeta, con el servidor que trae PHP:

```bash
php -S localhost:8000
```

Abre `http://localhost:8000`.

Con Laragon o XAMPP, copia la carpeta en `www` o `htdocs` y entra en `http://localhost/ae1`.

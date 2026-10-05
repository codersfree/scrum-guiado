---
description: Muestra en qué paso del flujo vas, qué está aprobado, qué sigue y por qué
---

# Dónde estamos

Lee `docs/scrum/progreso.md` (si no existe: "Aún no empezamos; usa `/scrum-guiado:empezar`") y `docs/proyecto.md` si existe.

Muestra:
```
📍 Vas en el paso N de 8: <nombre>
✅ Aprobados: <lista con fechas>
⏳ Siguiente: <comando> — <por qué toca ahora, qué recibe del paso anterior>
🧩 Módulos activos: <lista o "ninguno">
```
Si hay tareas en curso o pausadas (`docs/scrum/items/*.md` con `estado: en-progreso` o `pausada`), añádelas con su próximo paso. No ejecutes el paso: solo informa.

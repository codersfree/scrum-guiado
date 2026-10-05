---
description: Paso 3 — descubre las necesidades con preguntas y agrúpalas en épicas (bloques grandes de trabajo)
---

# Paso 3 · Épicas

Sigue la skill `flujo-guiado`. Comprueba que el paso 2 esté `aprobado` (existe `docs/producto/vision.md`); si no, detente y explica.

## Antes de empezar
Explica en 4–5 líneas: una **épica** es un bloque grande de funcionalidad que aún no se puede construir de una vez (ejemplo genérico y luego uno de **su** proyecto una vez que conozcas el contenido); es el paso 3 porque nace de la visión y es la materia prima de las historias; sale un archivo por épica; tú apruebas la lista. Marca el paso `en curso`.

## Cómo se hace
Usa al agente **`product-owner`**.
1. **Descubrimiento con preguntas**, **de una en una**, a partir de la visión: ¿qué tiene que poder hacer cada tipo de usuario? ¿qué pasa de principio a fin (de que llega hasta que obtiene el valor)? ¿qué necesita el equipo o el negocio para operar (administración, pagos, reportes)? Pregunta por roles de usuario, flujos principales y lo imprescindible frente a lo deseable. Ve anotando las respuestas.
2. **Propón una lista de épicas** (normalmente 4–10), cada una con una frase de objetivo y a qué parte de la visión contribuye. Muéstrala **primero como lista** y ajusta con la persona antes de escribir archivos.
3. Con la lista aprobada, crea `docs/scrum/epicas/EP-01-<slug>.md`, `EP-02-…`:
```
---
id: EP-01
titulo: ""
estado: borrador   # borrador | refinada | en-curso | terminada
---
# EP-01 · <Título>
## Objetivo
## Usuarios implicados
## Alcance (qué incluye)
## Fuera de alcance
## Cómo se medirá
## Historias (se completan en el paso 4)
```
Todavía **no** escribas historias ni prioridades: eso son los pasos 4 y 5.

## Aprobación
Muestra la lista final (ID, título, objetivo) y pide aprobación. Con el sí: paso 3 `aprobado`, bloque 📍📄🧭➡️ (rol: Product Owner; siguiente: `/scrum-guiado:historias`).

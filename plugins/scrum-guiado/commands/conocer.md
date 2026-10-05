---
description: Paso 1 — conoce tu proyecto con preguntas (qué es, para quién, equipo, stack, comandos) y crea la ficha. Propone qué módulos activar
---

# Paso 1 · Conocer el proyecto

Sigue la skill `flujo-guiado`. Comprueba que existe `docs/scrum/progreso.md`; si no, ejecuta primero lo que hace `/scrum-guiado:empezar`.

## Antes de empezar
Explica en 4–5 líneas: qué es la **ficha del proyecto** (una hoja con lo esencial: qué es, para quién, con qué tecnología y cómo se prueba; todos los agentes la leen para no suponer), por qué es el primer paso (sin conocer el proyecto no se puede planificar) y qué aprobarás al final. Marca el paso 1 como `en curso`.

## 1. Mira lo que ya hay (solo lectura)
Si hay archivos en la carpeta, inspecciónalos antes de preguntar: `composer.json`, `package.json`, `pyproject.toml`, `requirements.txt`, `Gemfile`, `go.mod`, `pom.xml`, `Dockerfile`, `README`, `.git`, `CLAUDE.md`/`AGENTS.md`, `.claude/`, `.mcp.json`. Cuéntale en 3 líneas qué detectaste y **no lo vuelvas a preguntar**. Respeta lo existente (no edites CLAUDE.md, AGENTS.md ni skills de otras herramientas).

## 2. Que te cuente el proyecto
Pide **un párrafo** con sus palabras: qué quiere construir. Luego, **una pregunta a la vez** (explicando por qué la haces y con tu recomendación), cubre solo lo que falte:
- ¿Para quién es y qué problema resuelve?
- ¿Es un proyecto nuevo o ya existe código?
- ¿Quién trabaja en él? (equipo, roles; si es una persona sola, que lo diga)
- Tecnología: lenguaje, framework, base de datos, pruebas, formato de código (si no la detectaste).
- Comandos del proyecto: cómo se ejecuta, se prueba y se formatea (si no los detectaste).
- Dónde se publicará y si usa GitHub.
- ¿Algo que ya esté decidido y no deba cuestionarse?

## 3. Módulos opcionales
Con lo que describió, **propón** qué módulos activar. Explica cada uno en una línea con un ejemplo de su proyecto y pregunta **uno por uno** si lo activa:
| Módulo | Qué aporta |
|---|---|
| diseño | agente de UI/UX: pantallas, componentes, accesibilidad |
| seo | posicionamiento en buscadores de las páginas públicas |
| bi | medición: qué datos capturar y qué KPIs mirar |
| captacion | formas de conseguir clientes o leads (correos, ofertas, embudo) |
| seguridad | revisión de seguridad en cada cambio |
| despliegue | publicación, entornos y respaldos |
Recomienda solo los que encajen; el resto queda `inactivo` y se pueden activar luego con `/scrum-guiado:modulos`.

## 4. Escribe la ficha
Crea `docs/proyecto.md` con estas secciones (profesional, concreto, sin inventar):
```
# <Nombre del proyecto> — ficha
## Qué es
## Para quién y qué problema resuelve
## Equipo
## Tecnología
(lenguaje, framework, base de datos, pruebas, formato)
## Comandos del proyecto
(ejecutar · probar · formatear · construir)
## Publicación y repositorio
(dónde se despliega · remoto git · flujo: GitHub Flow sí/no)
## Módulos
| Módulo | Estado |
|---|---|
| diseño | activo/inactivo |
| seo | ... |
| bi | ... |
| captacion | ... |
| seguridad | ... |
| despliegue | ... |
## Decisiones y supuestos
(lo que quedó decidido y lo que se asumió con tu recomendación)
## Preguntas abiertas
```
Si el proyecto usa git y no existe, indica el comando (`git init -b main`) y espera; no lo hagas tú sin permiso. Si hay git, ofrece crear la rama `docs/planificacion` para guardar estos documentos (nunca en `main`).

## 5. Aprobación
Muestra la ficha completa y pregunta: "¿La apruebas o ajustamos algo?". Con el sí: paso 1 `aprobado` con la fecha, y cierra con el bloque 📍📄🧭➡️ (rol en una empresa: analista de negocio / Product Owner; siguiente: `/scrum-guiado:vision`).

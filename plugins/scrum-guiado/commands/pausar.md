---
description: Pausa la tarea actual dejando un punto de guardado completo para retomarla después
argument-hint: "[motivo]"
---

# Pausar tarea

Motivo: $ARGUMENTS

1. Identifica la tarea por la rama actual (`git branch --show-current`). Si estás en `main`, avisa: no hay tarea activa.
2. Actualiza el archivo de la tarea para que alguien sin contexto pueda seguir: marca lo hecho en el Plan; reescribe **Próximo paso** con precisión (archivo, prueba que falta, comando, decisión pendiente); registra bloqueos y decisiones; añade en la Bitácora `- <fecha hora> — Pausada. Motivo: <...>. Estado: <qué quedó a medias>`; `estado: pausada`.
3. Si hay cambios sin commitear, commit en la rama: `wip(<área>): <qué quedó a medias> [<ID>]` (pregunta por los archivos que no deban incluirse).
4. Ofrece `git push -u origin <rama>` (solo con permiso).
5. Confirma en 3 líneas: qué quedó guardado, el próximo paso y cómo retomar (`/retomar <ID>`).

---
description: Retoma una tarea pausada o interrumpida exactamente donde quedó (lee la bitácora, compara con git y continúa)
argument-hint: "[ID]"
---

# Retomar tarea

ID: $ARGUMENTS

## 1. Encontrar la tarea
- Con ID: ese archivo en `docs/scrum/items/`. Si su rama no es la actual y hay cambios sin commitear, **pregunta antes de cambiar de rama**; luego `git switch <rama>`.
- Sin ID, en una rama con ID (`feature/HU-012-…`): esa tarea. En `main` sin ID: lista las tareas `en-progreso` o `pausada` (ID, título, última línea de bitácora, próximo paso) y pregunta cuál.

## 2. Reconstruir el contexto
Lee el archivo completo. Contrasta con la realidad: `git log --oneline -15`, `git status --porcelain`, `git stash list`, y corre el comando de pruebas de la ficha (`docs/proyecto.md`) para saber si está en verde o rojo. Si `main` avanzó, sugiere integrarlo y pregunta.

## 3. Informe breve
```
▶ Retomando <ID> · <título>
Objetivo: ...   Hecho: pasos X/Y   Estado real: pruebas ✅/❌, cambios sin commitear: ...
Bloqueos: ...   Próximo paso: ...
```
Si hay discrepancias entre la bitácora y la realidad, dilas y propón cómo corregirla.

## 4. Continuar
`estado: en-progreso`, bitácora: `- <fecha hora> — Tarea retomada.` Si el bloqueo sigue, no continúes: propón cómo resolverlo. Si no hay bloqueos, pregunta "¿Continúo con el próximo paso?" y delega en **`desarrollador`**.

---
description: Cierra la tarea actual verificando la Definición de Terminado (pruebas, QA, módulos activos, documentación) y gestionando el Pull Request
argument-hint: "[ID]  (por defecto, el de la rama actual)"
---

# Cerrar tarea

Tarea: $ARGUMENTS (vacío = la de la rama actual). Lee su archivo, `docs/scrum/definicion-de-terminado.md` y `docs/proyecto.md` (comandos y módulos activos). Explica, la primera vez, qué es la **Definición de Terminado** y que este comando es el control de calidad.

Ejecuta **en orden**; si algo falla, detente, anota en la bitácora qué falló y deja un "Próximo paso" claro.

1. **Chequeos técnicos:** todo commiteado; ejecuta los comandos de formato y de pruebas **de la ficha** (suite completa); busca restos de depuración y TODOs nuevos en `git diff main...HEAD`.
2. **QA:** delega en **`qa`** verificar cada criterio de aceptación y emitir veredicto en `docs/qa/<ID>.md`. Si es RECHAZADO, detente.
3. **Módulos activos:** `seguridad` → **`seguridad`** revisa el diff (bloqueante detiene); `diseno` y hay interfaz → **`disenador-ui`**; `seo` y hay páginas públicas → **`seo`**; `bi` y la historia genera datos de negocio → **`analista-bi`**. Los módulos inactivos se omiten.
4. **Documentación:** decisiones de arquitectura sin registrar → `arquitecto` las anota en `docs/arquitectura/adr/`; actualiza `CHANGELOG.md` si existe (lenguaje de usuario); completa la sección de cierre de la tarea y `estado: en-revision`. Commit `docs(<área>): cierre de <ID> [<ID>]`.
5. **Pull Request** (si hay remoto y `gh`): integra `origin/main`, repite pruebas, `git push -u origin <rama>` y `gh pr create` con objetivo, criterios cumplidos y resumen. **Pide permiso antes del push y del PR.** Sin `gh`, entrega título y cuerpo para pegar.
6. **Merge:** muestra el resumen de la DoD (✅/❌) y pregunta "¿Hago squash merge?". Con el sí y el CI en verde: `gh pr merge --squash --delete-branch`, `git switch main && git pull --ff-only`; `estado: terminada` con fecha y actualiza backlog y sprint. Sugiere la siguiente historia del sprint.

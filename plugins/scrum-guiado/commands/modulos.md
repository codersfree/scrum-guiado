---
description: Muestra los módulos opcionales (diseño, SEO, BI, captación, seguridad, despliegue) y permite activarlos o desactivarlos
argument-hint: "[nombre del módulo]"
---

# Módulos opcionales

Entrada: $ARGUMENTS. Lee la tabla "Módulos" de `docs/proyecto.md` (si no existe, indica que primero hay que hacer `/scrum-guiado:conocer`).

- Sin argumentos: muestra cada módulo con su estado y, en una línea, qué aporta y en qué paso del flujo interviene (diseño: historias con pantallas; seo: páginas públicas; bi: datos y KPIs; captacion: embudo y ofertas; seguridad: revisión en cada cierre; despliegue: publicación).
- Con un módulo: explica qué haría en **este** proyecto (con ejemplo), qué agente usa y qué cambiaría en la Definición de Terminado; pregunta si lo activa o desactiva. Actualiza la tabla de `docs/proyecto.md` y, si cambia la DoD, propón la línea nueva en `docs/scrum/definicion-de-terminado.md` y pide aprobación.
No actives nada sin confirmación.

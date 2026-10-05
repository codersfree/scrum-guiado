# Manual de uso: scrum-guiado

## 1. Para qué sirve
Para aprender el flujo de Scrum **haciéndolo**, con un orden claro y sin saltos. Cada paso te explica qué es, por qué toca ahora, qué documento sale y qué tienes que aprobar.

## 2. Instalar
1. Sube la carpeta a un repositorio de GitHub (por ejemplo `scrum-guiado`, privado).
2. En la terminal: `claude plugin marketplace add codersfree/scrum-guiado` y luego `claude plugin install scrum-guiado@scrum-guiado`.
3. Comprueba con `claude plugin list`.

## 3. Cómo se vive una sesión
- Abre `claude` en la carpeta del proyecto y escribe `/scrum-guiado:empezar`.
- Te explica el mapa, crea `docs/scrum/progreso.md` y te lleva al paso 1.
- **Paso 1 (conocer):** cuentas en un párrafo qué quieres construir; te hace preguntas de una en una; propone módulos opcionales; escribe la ficha. Tú la apruebas.
- **Pasos 2 a 7:** visión, épicas, historias, prioridad, acuerdos y primer sprint. Cada uno exige que el anterior esté aprobado.
- **Paso 8:** el ciclo: `/nueva-tarea`, trabajo, `/pausar` y `/retomar` si te interrumpes, `/cerrar-tarea`, `/daily`, `/review`, `/retro`.
- Si cierras Claude a la mitad, al volver te dice el paso actual; o escribe `/scrum-guiado:donde-estamos`.

## 4. Qué firmas o apruebas en cada paso
| Paso | Documento | Tú |
|---|---|---|
| 1 | Ficha | Apruebas que refleja tu proyecto |
| 2 | Visión | Apruebas la declaración y los indicadores |
| 3 | Épicas | Apruebas la lista |
| 4 | Historias y backlog | Apruebas épica por épica |
| 5 | Prioridad y MVP | Decides qué entra y qué espera |
| 6 | Acuerdos | Apruebas las definiciones de Listo y Terminado |
| 7 | Planning | Apruebas el objetivo y la carga del sprint |

## 5. Módulos opcionales
Se proponen en el paso 1 según tu proyecto: diseño, SEO, BI, captación, seguridad, despliegue. Quedan anotados en la ficha. `/scrum-guiado:modulos` permite cambiarlos luego. Los inactivos no se usan.

## 6. Si hay cambios
`/scrum-guiado:cambio <qué cambia>`: se evalúa el impacto y se decide si entra al backlog, reemplaza algo del sprint o se descarta. Queda registrado en `docs/scrum/cambios.md`.

## 7. Git
Si el proyecto usa git, el paquete bloquea commits directos en `main` (solo en proyectos con `docs/proyecto.md`). El trabajo va en ramas; el `push` y los Pull Requests siempre te piden permiso.

## 8. Actualizar el plugin
Sube los archivos nuevos al repositorio y, en la terminal, `claude plugin marketplace update scrum-guiado` y reinstala o actualiza desde `/plugin`. Tus documentos de `docs/` no se tocan.

## 9. Problemas frecuentes
| Síntoma | Causa | Solución |
|---|---|---|
| No aparecen los comandos | Plugin no instalado o sesión antigua | `claude plugin list`; reabre Claude o escribe `/reload-plugins` |
| Los comandos piden el prefijo | Es normal en plugins | Usa `/scrum-guiado:comando` |
| No veo avisos al iniciar | Aún no existe `docs/proyecto.md` | Completa el paso 1 |
| Un hook no corre | PHP no está en el PATH | `php -v` e instala PHP 8.x |

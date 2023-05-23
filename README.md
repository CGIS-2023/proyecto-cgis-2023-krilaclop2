
# Gestión de Triaje

_Kristina Lacasta López_

## Dominio del problema

El **triaje** es un proceso que permite una gestión del riesgo clínico para poder manejar adecuadamente y con seguridad los flujos de pacientes cuando la demanda y las necesidades clínicas superan a los recursos. Actualmente se utilizan sistemas de triaje estructurado con cinco niveles de prioridad y hacen posible clasificar a los pacientes a partir del grado de urgencia, de tal modo que los pacientes más urgentes serán asistidos primero y el resto serán reevaluados hasta ser vistos por el médico. Es un sistema multidisciplinar basado en motivos y en la urgencia de la consulta, son llevados a cabo por enfermería con apoyo médico puntual.

La disponibilidad de un sistema de triaje estructurado ha sido considerado como un índice de calidad básico y relevante de la relación riesgo-eficiencia. Existen cuatro índices de calidad que deben ser asumidos por el sistema de triaje implantado. Son:

- El índice de pacientes perdidos sin ser vistos por el médico.
- Tiempo desde la llegada a urgencias hasta que se inicia la clasificación.
- Tiempo que dura la clasificación.
- Tiempo de espera para ser visitado, establecido en cada uno de los niveles de prioridad de que conste el sistema de triaje.

En cuanto a este último indicador de calidad, se establecen niveles de priorización en la atención. Cada nivel va a determinar el tiempo óptimo entre la llegada y la atención y establece cuáles son esos tiempos ideales:

- Nivel I: prioridad absoluta con atención inmediata y sin demora.
- Nivel II: situaciones muy urgentes de riesgo vital, inestabilidad o dolor muy intenso. Demora de asistencia médica hasta 15 minutos.
- Nivel III: urgente pero estable hemodinámicamente con potencial riesgo vital que probablemente exige pruebas diagnósticas y/o terapéuticas. Demora máxima de 60 minutos.
- Nivel IV: urgencia menor, potencialmente sin riesgo vital para el paciente. Demora máxima de 120 minutos.
- Nivel V: no urgencia. Poca complejidad en la patología o cuestiones administrativas, citaciones, etc. Demora de hasta 240 minutos.

Un sistema estructurado de triaje puede servir también para valorar otra serie de parámetros que indirectamente van a relacionarse con cada uno de los niveles de prioridad y que están estrechamente condicionados por el incremento de la demanda, la cual depende tanto de determinantes externos como internos. Estos parámetros son fundamentales para orientar la gestión organizativa, económica y el funcionamiento del propio servicio de urgencias.

### Situación actual, Problemas, Expectativas, …

Los servicios de urgencias en España vienen padeciendo un aumento permanente de la demanda, lo cual dificulta la atención rápida y eficaz que se les exige. Esto es debido, en parte, a la elevada utilización de los servicios de urgencias para la atención de situaciones no urgentes que pueden condicionar demoras en la asistencia de pacientes graves además de generar consecuencias negativas para el conjunto del hospital, incluyendo el incremento de costes asistenciales.

En esta década ha habido una transformación profunda de los servicios de urgencias hospitalarios (SUH) con cambios estructurales, organizativos y funcionales para adaptarse a esta situación, siendo el sistema de triaje hospitalario uno de los puntos clave en dichas modificaciones.

Se pretende realizar una aplicación web de gestión de triaje de manera que se pueda lidiar con los casos no urgentes y que estos no afecten, de manera determinante, a la atención de casos de mayor urgencia, y por otra parte, que permita poder gestionar de manera más eficiente el registro de los datos personales de un paciente.

### Información sobre los clientes

Para nuestro problema, nuestros clientes son los hospitales que deseen implementar un sistema de triaje en sus instalaciones. Los clientes esperan de un software de triaje que cumpla las siguientes condiciones:
- Que presente un diseño que facilite el proceso de triaje y este sea lo más rápido posible y más adecuado a la atención sanitaria. 
- Que no modifique el método, es un software aplicado a un algoritmo que ya existe. 


## Objetivos

Se pretende realizar una aplicación web que permita mejorar la asistencia en los centros de salud y hospitales, de manera que se reduzca el tiempo de espera en urgencias. De este modo, poder mejorar la situación sanitaria.

Requisitos generales:

- **RG01: Datos de los usuarios.**
El sistema deberá permitir recoger toda la información relevante sobre los usuarios.

- **RG02:  Clasificación de Pacientes.**
El sistema deberá permitir que los pacientes sean clasificados correctamente y redirigidos al médico correspondiente.

- **RG03: Gestión del tiempo de espera en Urgencias.**
El sistema deberá permitir administrar de manera eficiente los servicios de urgencias hospitalarias para reducir el tiempo de espera, es decir, desde la llegada a urgencias hasta que se inicia la clasificación, lo máximo posible.

- **RG04:  Gestión del índice de pacientes perdidos en Urgencias.**
El sistema deberá permitir administrar de manera eficiente los servicios de urgencias hospitalarias para reducir el índice de pacientes perdidos sin ser vistos por el médico.

- **RG05: Gestión del tiempo de clasificación en Urgencias.**
El sistema deberá permitir administrar de manera eficiente los servicios de urgencias hospitalarias para reducir el tiempo que dura la clasificación.


## Usuarios del sistema

- **Paciente:** Pacientes con diferentes necesidades según su prioridad y riesgo.

- **Administrativo.**

- **Enfermero:**
- - Enfermeros de triaje.
- - Enfermeros de tratamiento.

- **Médico de urgencias:**
- Médicos especializados en diferentes campos.


## Requisitos de información

- **RI01: Pacientes.**
El sistema deberá permitir disponer de la siguiente información sobre los pacientes:
- - Identificador
- - Nombre
- - Apellidos
- - DNI
- - Correo Electrónico
- - Sexo (Hombre, Mujer, Otro)
- - Fecha de Nacimiento
- - Seguro (Adeslas, Sanitas, Asisa, MAPFRE, None)
- - Para cada Registro de una entrada en UCI:
- - Fecha y hora de entrada
- - Razón de Admisión

- - Para cada registro de triaje se genera un Informe de Triaje:
- - - Enfermero en triaje
- - - Fecha y hora de entrada
- - - Observaciones
- - - Nivel de riesgo del paciente (Nivel I, II, III, IV, V)
- - - Especialidad a derivar
- - - Médico a derivar

- - Para cada registro de una salida en UCI se genera un Informe Médico:
- - - Fecha y hora de salida
- - - Razón de Admisión
- - - Médico
- - - Observaciones
- - - Diagnóstico
- - - Tratamiento

- **RI02: Administrativos.**
El sistema deberá permitir disponer de la siguiente información sobre los administrativos:
- - Identificador
- - Nombre
- - Apellidos
- - DNI
- - Sexo (Hombre, Mujer, Otro)
- - Fecha de Nacimiento
- - Correo Electrónico

- **RI03: Enfermeros.**
El sistema deberá permitir disponer de la siguiente información sobre los enfermero:
- - Identificador
- - Nombre
- - Apellidos
- - DNI
- - Sexo (Hombre, Mujer, Otro)
- - Fecha de Nacimiento
- - Correo Electrónico
- - Turno (Tratamiento, Triaje)

- **RI04: Médicos.**
El sistema deberá permitir disponer de la siguiente información sobre los médicos:
- - Identificador
- - Nombre
- - Apellidos
- - DNI
- - Sexo (Hombre, Mujer, Otro)
- - Fecha de Nacimiento
- - Correo Electrónico
- - Especialidad (Alergología, Cardiología, Pediatría, ...)

- **RI05: Tratamientos.**
El sistema deberá permitir disponer de la siguiente información sobre los tratamientos:
- - Identificador
- - Nombre del tratamiento
- - Tipo (médico, quirúrgico, paliativo, alternativo)
- - Dosis (tomas/día)
- - Fecha y hora en el que se administró


## Requisitos funcionales

- **RF01.1: Lista de pacientes.**
Como administrativo y enfermero de triaje: debe poder ver un listado con todos los datos almacenados de los pacientes en espera de pasar por triaje.

- **RF01.2: Registro de los pacientes.**
Como administrativo: debe poder generar y actualizar los registros de los pacientes que lleguen a Urgencias.

- **RF01.3: Informes de Triaje.**
Como enfermero de triaje: debe poder generar y actualizar informes con los datos detallados sobre los problemas que presente el paciente y a qué médico ha de redireccionarse.

- **RF01.4: Informes de Médico.**
Como médico: debe permitir generar y actualizar informes con los datos del paciente, incluyendo los problemas presentados, el diagnóstico y tratamiento, si ha sido administrado.

- **RF02.1: Gravedad de los pacientes.**
Como enfermero: se desea clasificar a los pacientes según su nivel de gravedad. Además, debe poderse escribir comentarios adicionales, observaciones, sobre la condición del paciente.

- **RF03.1: Prioridad de los pacientes.**
Como enfermero: se debe permitir ordenar los pacientes por prioridad, es decir, tras ser clasificados poder ver un listado de los paciente ordenados según su prioridad.

- **RF04.1: Disponibilidad de los médicos.**
El sistema debe permitir ver en un listado los médicos que se encuentran disponibles para atender a los pacientes para pasar a triaje.

- **RF05.1: Disponibilidad de los enfermeros.**
El sistema debe permitir ver en un listado los enfermeros que se encuentran disponibles para atender a los pacientes para pasar a triaje. De manera, que agilice el proceso de clasificación.


## Requisitos no funcionales

- **RNF01: Rendimiento.**
El sistema debe poder manejar el número requerido de usuarios sin ninguna degradación en el rendimiento.  Para los SUH de un hospital pequeño, este número corresponderá a, al menos, 200 usuarios permitidos.

- **RNF02: Acceso.**
El sistema debe estar protegido contra el acceso no autorizado.

- **RNF03: Escalabilidad.**
El sistema debe ser capaz de permitir aumentar su base de datos.

- **RNF04: Disponibilidad.**
El sistema debe estar disponible cuando sea necesario.

- **RNF05: Mantenimiento.**
El sistema debe ser fácil de mantener y actualizar.

- **RNF06: Interfaz.**
El sistema debe presentar una interfaz amigable, fácil de usar y comprender por los usuarios.


## Reglas de negocio

- **RN01: Eliminar Paciente.**
El sistema deberá evitar que se puedan eliminar permanentemente los datos correspondientes a un paciente.

- **RN02: Asignación Médicos.**
El sistema deberá evitar que más de un paciente sea asignado al mismo médico en el momento en el que ya esté atendiendo a otro paciente.

- **RN03: Asignación Enfermero.**
El sistema deberá evitar que más de un paciente sea asignado al mismo enfermero en el momento en el que ya esté tratando a otro paciente.


## Modelo conceptual

<img src="triaje2.png" alt="Modelado Concpetual Triaje">

> Acceso al Google Drive: 'https://docs.google.com/document/d/1PJ4XQMhbaTsfHtydcpAgyM3474Mv0MHhffudVmPXV-4/edit?usp=sharing'







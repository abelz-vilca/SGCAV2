<?php

use Illuminate\Database\Seeder;

class CriteriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            //E1
            'El programa de estudios ha definido claramente el número y las características los miembros de sus grupos de interés, quienes han participado y participan en procesos de consulta para la definición de los propósitos del programa de estudios.',
            'Se demuestra que los propósitos del programa de estudios están alineados con los propósitos institucionales',
            'Se demuestra que los propósitos del programa de estudios están alineados con los propósitos institucionales.',
            'Estos propósitos están establecidos en documentos oficiales y están a disposición de toda la sociedad a través de la página web de la institución, los prospectos respectivos de los programas de estudios, entre otros documentos que la institución pudiera tener.',

            //E2
            'El programa de estudios identifica la demanda social, planes de desarrollo regional, nacional o internacional para definir la oferta académica en cuanto a su pertinencia y tamaño. Para este proceso se considera la opinión de los grupos de interés.',
            //E3
            'Con una periodicidad definida por el programa de estudios (máximo 3 años) analiza y considera los cambios que existen en los ámbitos económico, social, político, cultural, científico y tecnológico, con el propósito de determinar la pertinencia de realizar ajustes en las políticas y objetivos que aseguren un camino hacia la excelencia.',
            'Esta revisión se realiza con la participación de los grupos de interés definidos por el programa de estudios y los resultados son comunicados al público en general.',

            //E4
            'Todas las actividades regulares que realiza el programa de estudios, así como los proyectos especiales, deben estar financiados en un horizonte temporal que asegure su continuidad.',
            'Deben existir evidencias de que la gestión de los recursos se realiza de una manera eficiente, ya sea por indicadores financieros, reportes de auditorías, indicadores de gestión, evaluación del plan operativo, informes de evaluación de cumplimiento de objetivos, metas y gestión adecuada de recursos.',
            'Deben existir evidencias de que la gestión en Investigación, Desarrollo e Innovación (I+D+i) se realizan de una manera eficiente, ya sea por indicadores de Ciencia, Tecnología e Innovación Tecnológica (CTeI), tesis defendidas, proyectos de investigación financiados por agentes internos o externos de la institución, informe de equipamientos de los laboratorios de investigación.',
            'Existen evidencias de que el programa de estudios tiene los recursos financieros para el desarrollo de actividades de vinculación con el medio a través de sus proyectos de I+D+i .',

            //E5
            'El perfil de egreso debe incluir las competencias generales y específicas que se espera que los estudiantes logren durante su formación y sean verificables como condición para el egreso.',
            'En la fundamentación y detalle del perfil de egreso se debe evidenciar su alineación con los propósitos del programa de estudios, el currículo, las expectativas de los grupos de interés y el entorno socioeconómico.',
            'Las competencias detalladas en el perfil de egreso deben orientar la gestión del programa de estudios en términos de actividades de formación (p.e. cursos), los recursos para el logro de las competencias (p.e. equipamiento) y los actores involucrados (p.e. docentes competentes).',

            //E6
            'El programa de estudios identifica la periodicidad de revisión del perfil de egreso. La revisión deberá efectuarse en un periodo máximo de 3 años.',
            'Esta revisión será conducida por los directivos del programa de estudios, con la participación de los grupos de interés y otros actores que el programa de estudios considere idóneos.',
            'La revisión del perfil considera: el desempeño profesional, avances científicos y tecnológicos, nuevas demandas de la comunidad académica y el entorno, entre otros. De ser el caso, esta revisión termina con la definición del nuevo perfil de egreso.',

            'Cualquier modificación en el perfil de egreso estará acompañada de los cambios necesarios en los mecanismos que tiene programa de estudios para lograr las competencias definidas para los estudiantes y egresados.',

            //E7
            'La implementación del SGC está enmarcada en la definición de políticas, objetivos, procesos y procedimientos para lograrlo. Además debe considerar mecanismos que brinden confianza y que controlen los procesos para la mejora continua.',
            'El programa de estudios debe demostrar evidencia del funcionamiento del SGC en sus procesos principales y de las acciones para su evaluación y mejora (auditorías internas).',

            //E8
            'El programa de estudios desarrolla un proceso participativo (se contempla la contribución que los grupos de interés, representantes de docentes, estudiantes, administrativos y directivos pudieran hacer al respecto) para la identificación de oportunidades de mejora a fin de alcanzar la excelencia académica.',
            'Se definen, implementan y monitorean planes de mejora en función a un criterio de priorización para la ejecución.',
            'El programa de estudios debe evaluar el cumplimiento de los planes de mejora y demostrar avances periódicos (de acuerdo a las metas que se hayan fijado deberán poder observarse avances al menos semestralmente) en su implementación.',

            //E9
            'El plan de estudios incluye, entre otros componentes, los perfiles de ingreso y egreso, los objetivos educacionales, la malla curricular, los criterios y estrategias de enseñanza-aprendizaje, de evaluación y titulación.',
            'El programa de estudios tiene definidas las competencias que debe tener un estudiante cuando ingresa y egresa.',
            'El perfil de egreso define las estrategias de enseñanza aprendizaje, de evaluación del logro de competencias y criterios para la obtención del grado y titulación. Así mismo orienta el logro de los objetivos educacionales.',
            'El programa de estudios asegura su pertinencia interna revisando periódica y participativamente el plan de estudios.',
            'La revisión deberá efectuarse en un periodo máximo de 3 años, como se sugiere en la nueva ley universitaria.',

            //E10
            'El programa de estudios distribuye los cursos del Plan de Estudios indicando el número de créditos, horas dedicadas a teoría, práctica y enseñanza virtual. En cuanto al tipo curso si es general, específico o de especialidad. Respecto al componente, si alude a I+D+i, formación ciudadana, responsabilidad social y experiencia pre profesional.',

            //E11
            'El programa de estudios debe implementar un sistema de evaluación del aprendizaje que monitoree el logro de las competencias a lo largo de la formación.',
            'El plan de estudios, tareas académicas y actividades en general aseguran el logro de las competencias.',

            //E12
            'El proceso de enseñanza aprendizaje incluye actividades de I+D+i y de responsabilidad social relacionadas con la
            naturaleza del programa de estudios.',

            'El programa de estudios asegura la participación de estudiantes y docentes en actividades de I+D+i y responsabilidad social y muestra los resultados.',

            //E13
            'La movilidad de los estudiantes debe contribuir al logro de las competencias establecidas en el perfil de egreso.',

            'La movilidad de los docentes debe contribuir al fortalecimiento de sus capacidades para el desarrollo de actividades de enseñanza aprendizaje',

            //E14
            'La normatividad para la gestión de la selección, evaluación, capacitación y perfeccionamiento del personal docente es de pleno conocimiento de todos los académicos.',
            'El programa de estudios tiene mecanismos que evalúan el desempeño docente con la finalidad de identificar necesidades de capacitación y perfeccionamiento o separación. El perfeccionamiento incluye actualización, innovación pedagógica, manejo de tecnologías de información y comunicación, entre otros campos. El programa de estudios evalúa el grado de satisfacción de los docentes con los programas de capacitación y perfeccionamiento.',
            'El programa de estudios debe tener mecanismos de selección transparentes, de convocatoria pública debidamente difundida, que aseguren la diversidad formativa, así como la idoneidad de los docentes.',
            'Si el programa de estudios contempla un porcentaje de virtualización, el programa de capacitación y perfeccionamiento deberá contemplar estrategias y herramientas de aprendizaje para este tipo de enseñanza, sobre todo para los docentes involucrados en los cursos virtuales.',

            //E15
            'El programa de estudios debe cumplir con la normatividad vigente en lo concerniente a la plana docente.',
            'Los docentes cuentan con los grados académicos exigidos por el programa de estudios superiores, así como con las calificaciones tanto profesionales, didácticas y personales que aseguran el logro del perfil de egreso.',
            'El programa de estudios registra por docente*: cursos que imparte, grado académico, título profesional, línea de investigación, experiencia docente, con indicación de la misma en los cursos que se le asigna y experiencia profesional adicional.',

            //E16
            'Dicho reconocimiento se podrá otorgar a través de diferentes formas. El programa de estudios debe mantener un registro de las diferentes formas de reconocimiento otorgados a los docentes en los últimos cinco años.',

            //E17
            'El programa de estudios debe mantener lineamientos para el desarrollo científico académico de los docentes y definir un plan de desarrollo académico-profesional que debe ser monitoreado para identificar los avances y logros. Este plan de desarrollo por lo menos debe ser para los docentes de tiempo completo.',
            'Asimismo, debe establecer mecanismos de motivación y reconocimiento por los logros obtenidos.',

            //E18
            'El programa de estudios ha definido el perfil de ingreso, el cual complementará los mecanismos de admisión institucionales que establecen los requisitos de admisión.',
            'El programa de estudios reporta la tasa de ingreso por proceso de admisión, así como el resultado de desempeño de los ingresantes en dicho proceso, en función del perfil de ingreso.',

            //E19
            'El programa de estudios identifica las carencias que tienen los ingresantes a fin de diseñar, ejecutar y mantener actividades de nivelación.',
            'El programa de estudios evalúa los resultados de las actividades de nivelación para establecer mejoras.',

            //E20
            'El programa de estudios mantiene y ejecuta mecanismos para la identificación de problemas en el avance esperado de los estudiantes a fin de diseñar, ejecutar y mantener actividades para superarlos. Las actividades pueden estar en el ámbito académico, científico, tecnológico y de bienestar.',
            'El programa de estudios tiene un sistema de tutoría implementado y un sistema de apoyo pedagógico, que asegure la permanencia y titulación de los estudiantes, previniendo la deserción.',
            'El programa de estudios evalúa los resultados de las actividades de reforzamiento y nivelación de estudiantes para asegurar el logro de las competencias.',

            //E21
            'El programa de estudios identifica las actividades extracurriculares que contribuyan a la formación, mantiene un registro de dichas actividades, estadísticas de participación y nivel de satisfacción de los estudiantes.',
            'El programa de estudios evalúa los resultados de las actividades extracurriculares para establecer mejoras.',

            //E22
            'El programa de estudios gestiona los recursos y alianzas estratégicas a nivel nacional e internacional que faciliten la I+D+i por parte de los docentes del programa.',
            'El programa de estudios implementa lineamientos que regulan y aseguran la calidad de la I+D+i a cargo de investigadores registrados en el Registro Nacional de Investigadores en Ciencia y Tecnología (REGINA).',
            'Los lineamientos para I+D+i de calidad deben incluir exigencias para involucrar a estudiantes y mantener un mínimo de docentes investigadores registrados en REGINA, que se incremente en el tiempo.',
            'El nivel de calidad se puede determinar por estándares establecidos por el CONCYTEC o entidades internacionales.',
            'El programa de estudios usa herramientas de vigilancia tecnológica que le ayuden a tomar decisiones y anticiparse a los cambios de su especialidad para orientar la I+D+i.',
            'El programa de estudios mantiene y ejecuta mecanismos para promover la I+D+i en las líneas establecidas y evalúa el logro (p.e. patentes, publicaciones, desarrollos tecnológicos, presentaciones en congresos, entre otros), según lo establecido por la universidad.',

            //E23
            'La rigurosidad, pertinencia y calidad se establecen en lineamientos con la participación de docentes investigadores, expertos externos y en función de estándares nacionales e internacionales. Estos lineamientos deben haber sido elaborados por investigadores registrados en el REGINA y estar alineados con la política general de I+D+i de la universidad.',
            'Todas las investigaciones conducentes al grado o título deben guardar coherencia con las líneas de investigación registrados por el programa de estudios.',
            'El programa ejecuta mecanismos para garantizar el cumplimiento de los lineamientos de I+D+i.',

            //E24
            'El programa de estudios brinda facilidades para que los resultados de los trabajos de I+D+i se puedan publicar en artículos científicos, libros y/o capítulos de libros o registros de propiedad intelectual.',
            'El programa debe contar con artículos científicos publicados en revistas indizadas.',
            'El programa de estudios establece y difunde información actualizada de las publicaciones realizadas por sus docentes y/o estudiantes. Además mantiene actualizado su repositorio de investigaciones y es de fácil acceso al público en general',
            'Los sílabos de cursos incluyen resultados de las investigaciones.',
            'Los docentes son capacitados para ayudarlos a lograr las publicaciones.',

            //E25
            'Las acciones de responsabilidad social relevantes a la formación de los estudiantes deben guardar relación con la especialidad.',
            'Las acciones de responsabilidad social deben considerar los principios de equidad e inclusión en su entorno. Así mismo, considerar la articulación con entidades internas y externas a la universidad a fin de facilitar y obtener mayor impacto en el ámbito social.',

            //E26
            'El programa de estudios conoce e implementa los estándares establecidos sobre seguridad ambiental dispuestos por los órganos competentes (MINAM, MINEDU u otros).',

            //E27
            'El programa de estudios tiene servicios de bienestar, mantiene y ejecuta mecanismos para asegurar que los estudiantes, docentes y personal administrativo conocen dichos programas de bienestar y acceden a ellos.',
            'El programa de estudios implementa mecanismos para evaluar el nivel de satisfacción de los usuarios de los servicios de bienestar.',

            //E28
            'El programa de estudios identifica las necesidades de equipamiento para lograr las competencias planteadas en el perfil de egreso.',
            'El programa de estudios diferencia entre laboratorios de investigación y de enseñanza, dependiendo de la disciplina.',
            'Si el programa de estudios contempla un porcentaje de virtualización, deberá contarse con la infraestructura y equipamientos que ayuden a su correcta ejecución.',

            //E29
            'El programa de estudios demuestra que hace uso del programa de desarrollo, ampliación, mantenimiento, renovación y seguridad de su infraestructura y equipamiento.',
            'El equipamiento está en condiciones adecuadas para su uso y contar con el soporte para mantenimiento y funcionamiento.',

            //E30
            'El programa de estudios diseña e implementa el sistema de información y comunicación, determinar los procedimientos y registros, así como evalúa su funcionamiento.',
            'El programa de estudios garantiza que el sistema de información incorpore tanto información técnica como estadística, así como el uso del mismo en la gestión académica, I+D+i y administrativa.',

            //E31
            'El centro de información y referencia o similar puede incluir: biblioteca tradicional, biblioteca virtual, acceso a bases de datos, hemerotecas, entre otros. Además, deberá incluir el repositorio de tesis e investigaciones realizadas en el programa de estudios. Dicho repositorio deberá considerar lo indicado en la Ley de Repositorio Nacional.',
            'El programa de estudios tiene un programa que anualmente asegura la actualización y mejora del centro de información y referencia o similar en concordancia a las necesidades del programa de estudios y/o vigilancia tecnológica. El centro de información y referencia se encuentra diseñado para satisfacer las necesidades de los docentes y estudiantes, en términos de libros más solicitados, bases de datos, adquisición y manejo de los libros de acuerdo a la necesidad del programa de estudios, etc. Es capaz de reportar indicadores de satisfacción y de uso de los principales servicios que se brinden.',

            //32
            'El programa de estudios gestiona los recursos humanos de acuerdo con los perfiles de puestos y funciones establecidas.',
            'El programa de estudios identifica los logros y las necesidades de capacitación a partir de la evaluación de personal.',
            'El programa de estudios dispone de un registro en el cual se considera: nombre del personal administrativo/directivo, cargo, grado académico, título profesional, experiencia profesional, experiencia en gestión, horas de capacitación en los últimos tres años en temas afines al cargo, entre otros.',

            //E33
            'El avance en el logro de las competencias se evalúa de forma directa a lo largo de la formación de los estudiantes.',
            'El programa de estudios define y aplica mecanismos de evaluación del logro de las competencias definidas en el perfil de egreso.',

            //E34
            'El monitoreo de la inserción laboral debe considerar y mostrar información cuantitativa y cualitativa en relación a empleabilidad del país.',
            'El logro de los objetivos educacionales implica una evaluación indirecta del desempeño profesional esperado, que está alineado con el perfil de egreso. Esta medición puede incluir la satisfacción de empleadores y egresados, la certificación de competencias, entre otros.',
            'Los hallazgos del seguimiento a egresados orientan al programa de estudios para realizar la revisión y actualización del perfil de egreso, así como de los objetivos educacionales.'


        );
        for ($i = 0; $i < count($array); $i++) {
            DB::table('criterios')->insert([
                'nombre_criterio' => $array[$i],
            ]);
        }
    }
}

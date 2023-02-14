<?php

namespace Database\Seeders;

use App\Models\Resultado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //////////////////////////////
        //////---1_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        /////////ESPECIFICAR//////////
        //////////////////////////////
        $Resultado1=new Resultado();
        $Resultado1->Resultados=('ELABORAR MAPAS DE PROCESOS QUE PERMITAN IDENTIFICAR LAS ÁREASINVOLUCRADAS EN UN SISTEMA DE INFORMACIÓN, UTILIZANDO HERRAMIENTASINFORMÁTICAS Y LAS TICS, PARA GENERAR INFORMES SEGÚN LAS NECESIDADES DELA EMPRESA.');
        $Resultado1->Estado=('1');
        $Resultado1->Codigo_comp=('220501006');
        $Resultado1->save();
        //////////////////////////////
        $Resultado2=new Resultado();
        $Resultado2->Resultados=('PLANTEAR DIFERENTES ALTERNATIVAS, DE MODELOS TECNOLÓGICOS DE INFORMACIÓNEMPRESARIAL, TENIENDO EN CUENTA LA PLATAFORMA TECNOLÓGICA DE LA EMPRESAY LAS TENDENCIAS DEL MERCADO, PARA DAR SOLUCIÓN A LAS SITUACIONESRELACIONADAS CON EL MANEJO DE LA INFORMACIÓN DE LA ORGANIZACIÓN.');
        $Resultado2->Estado=('1');
        $Resultado2->Codigo_comp=('220501006');
        $Resultado2->save();
        //////////////////////////////
        $Resultado3=new Resultado();
        $Resultado3->Resultados=('APLICAR LAS TÉCNICAS DE RECOLECCIÓN DE DATOS , DISEÑANDO LOSINSTRUMENTOS NECESARIOS PARA EL PROCESAMIENTO DE INFORMACIÓN, DEACUERDO CON LA SITUACIÓN PLANTEADA POR LA EMPRESA.');
        $Resultado3->Estado=('1');
        $Resultado3->Codigo_comp=('220501006');
        $Resultado3->save();
        //////////////////////////////
        //////////ANALIZAR////////////
        //////////////////////////////
        $Resultado4=new Resultado();
        $Resultado4->Resultados=('INTERPRETAR EL INFORME DE REQUERIMIENTOS, PARA DETERMINAR LAS NECESIDADES TECNOLÓGICAS EN EL MANEJO DE LA INFORMACIÓN, DE ACUERDO CON LAS NORMAS Y PROTOCOLOS ESTABLECIDOS EN LA EMPRESA.');
        $Resultado4->Estado=('1');
        $Resultado4->Codigo_comp=('220501032');
        $Resultado4->save();
        //////////////////////////////
        $Resultado5=new Resultado();
        $Resultado5->Resultados=('ELABORAR EL INFORME DE LOS RESULTADOS DEL ANÁLISIS DEL SISTEMA DEINFORMACIÓN, DE ACUERDO CON LOS REQUERIMIENTOS DEL CLIENTE SEGÚNNORMAS Y PROTOCOLOS ESTABLECIDOS.');
        $Resultado5->Estado=('1');
        $Resultado5->Codigo_comp=('220501032');
        $Resultado5->save();
        //////////////////////////////
        $Resultado6=new Resultado();
        $Resultado6->Resultados=('REPRESENTA EL BOSQUEJO DE LA SOLUCIÓN AL PROBLEMA PRESENTADO POR EL CLIENTE, MEDIANTE LA ELABORACIÓN DE DIAGRAMAS DE CASOS DE USO, APOYADO EN EL ANÁLISIS DEL INFORME DE REQUERIMIENTOS, AL CONFRONTAR LA SITUACIÓN PROBLEMICA CON EL USUARIO SEGÚN NORMAS Y PROTOCOLOS DE LA ORGANIZACION.');
        $Resultado6->Estado=('1');
        $Resultado6->Codigo_comp=('220501032');
        $Resultado6->save();
        //////////////////////////////
        $Resultado7=new Resultado();
        $Resultado7->Resultados=('VALORAR LA INCIDENCIA DE LOS DATOS EN LOS PROCESOS DEL MACROSISTEMA, TOMANDO COMO REFERENTE EL DICCIONARIO DE DATOS Y LAS MINIESPECIFICACIONES, PARA LA CONSOLIDACIÓN DE LOS DATOS QUE INTERVIENEN, DE ACUERDO CON PARÁMETROS ESTABLECIDOS.');
        $Resultado7->Estado=('1');
        $Resultado7->Codigo_comp=('220501032');
        $Resultado7->save();
        //////////////////////////////
        $Resultado8=new Resultado();
        $Resultado8->Resultados=('CONSTRUIR EL MODELO CONCEPTUAL DEL MACROSISTEMA FRENTE A LOS REQUERIMIENTOS DEL CLIENTE, MEDIANTE EL USO E INTERPRETACIÓN DE LA INFORMACIÓN LEVANTADA, REPRESENTADO EN DIAGRAMAS DE CLASE, DE INTERACCIÓN, COLABORACIÓN Y CONTRATOS DE OPERACIÓN, DE ACUERDO CON LAS DIFERENTES SECUENCIAS, FASES Y PROCEDIMIENTOS DEL SISTEMA.');
        $Resultado8->Estado=('1');
        $Resultado8->Codigo_comp=('220501032');
        $Resultado8->save();
        //////////////////////////////
        ///////////DISEÑAR////////////
        //////////////////////////////
        $Resultado9=new Resultado();
        $Resultado9->Resultados=('DISEÑAR LA ARQUITECTURA DEL SOFTWARE, MEDIANTE LA INTERPRETACIÓN DE LAS CLASES, OBJETOS Y MECANISMOS DE COLABORACIÓN, UTILIZANDO HERRAMIENTAS TECNOLÓGICAS DE DISEÑO, DE ACUERDO CON LAS TENDENCIAS DE LAS TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN.');
        $Resultado9->Estado=('1');
        $Resultado9->Codigo_comp=('220501033');
        $Resultado9->save();
        //////////////////////////////
        $Resultado10=new Resultado();
        $Resultado10->Resultados=('DISEÑAR LA ESTRUCTURA DE DATOS, A PARTIR DEL MODELO CONCEPTUAL DETERMINADO EN EL ANÁLISIS DEL SISTEMA, UTILIZANDO HERRAMIENTAS TECNOLÓGICAS DE BASES DE DATOS, SEGÚN LAS NORMAS Y ESTÁNDARES ESTABLECIDOS.');
        $Resultado10->Estado=('1');
        $Resultado10->Codigo_comp=('220501033');
        $Resultado10->save();
        //////////////////////////////
        //////---2_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        ///////////DISEÑAR////////////
        //////////////////////////////
        $Resultado11=new Resultado();
        $Resultado11->Resultados=('APLICAR POLÍTICAS Y MECANISMOS DE CONTROL EN EL DISEÑO DEL SISTEMA DEINFORMACIÓN, MEDIANTE EL ANÁLISIS DE LA VULNERABILIDAD DE LA INFORMACIÓN,SIGUIENDO LOS PARÁMETROS ESTABLECIDOS POR LA ORGANIZACIÓN.');
        $Resultado11->Estado=('1');
        $Resultado11->Codigo_comp=('220501033');
        $Resultado11->save();
        //////////////////////////////
        $Resultado12=new Resultado();
        $Resultado12->Resultados=('DISEÑAR LA ARQUITECTURA TECNOLÓGICA DEL SISTEMA DE INFORMACIÓN, MEDIANTEEL RECONOCIMIENTO DE HARDWARE Y SOFTWARE, DE ACUERDO CON LA TECNOLOGÍADISPONIBLE EN EL MERCADO, EL INFORME DE ANÁLISIS LEVANTADO Y EL DIAGRAMADE DISTRIBUCIÓN.');
        $Resultado12->Estado=('1');
        $Resultado12->Codigo_comp=('220501033');
        $Resultado12->save();
        //////////////////////////////
        $Resultado13=new Resultado();
        $Resultado13->Resultados=('CONSTRUIR EL PROTOTIPO DEL SISTEMA DE INFORMACIÓN, A PARTIR DEL ANÁLISIS DE LAS CARACTERÍSTICAS FUNCIONALES DEL SISTEMA EN RELACIÓN CON FACILIDAD DE MANEJO, FUNCIONALIDAD Y EXPERIENCIA DEL USUARIO, APOYADO EN SOFTWARE APLICADO SEGÚN PROTOCOLOS DE DISEÑO.');
        $Resultado13->Estado=('1');
        $Resultado13->Codigo_comp=('220501033');
        $Resultado13->save();
        //////////////////////////////
        $Resultado14=new Resultado();
        $Resultado14->Resultados=('ELABORAR EL INFORME DE DISEÑO DEL SISTEMA DE INFORMACIÓN, DE ACUERDOCON LA SELECCIÓN DE LAS HERRAMIENTAS, TANTO DE SOFTWARE COMO DEHARDWARE, REQUERIDAS PARA LA SOLUCIÓN INFORMÁTICA.');
        $Resultado14->Estado=('1');
        $Resultado14->Codigo_comp=('220501033');
        $Resultado14->save();
        //////////////////////////////
        /////////PARTICIPAR///////////
        //////////////////////////////
        $Resultado15=new Resultado();
        $Resultado15->Resultados=('INTERPRETAR EL DIAGNÓSTICO DE NECESIDADES INFORMÁTICAS, PARA DETERMINAR LAS TECNOLÓGICAS REQUERIDAS EN EL MANEJO DE LA INFORMACIÓN, DE ACUERDO CON LAS NORMAS Y PROTOCOLOS  ESTABLECIDOS POR LA EMPRESA');
        $Resultado15->Estado=('1');
        $Resultado15->Codigo_comp=('220501009');
        $Resultado15->save();
        //////////////////////////////
        //////////CONSTRUIR///////////
        //////////////////////////////
        $Resultado16=new Resultado();
        $Resultado16->Resultados=('INTERPRETAR EL INFORME TECNICO DE DISEÑO,  PARA DETERMINAR EL PLAN DE TRABAJO DURANTE LA FASE DE CONSTRUCCION DEL SOFTWARE, DE ACUERDO CON LAS NORMAS Y PROTOCOLOS.');
        $Resultado16->Estado=('1');
        $Resultado16->Codigo_comp=('220501007');
        $Resultado16->save();
        //////////////////////////////
        $Resultado17=new Resultado();
        $Resultado17->Resultados=('CONSTRUIR LA BASE DE DATOS, A PARTIR DEL MODELO DE DATOS DETERMINADO EN EL DISEÑO DEL SISTEMA, UTILIZANDO SISTEMAS DE GESTIÓN DE BASE DE DATOS, SEGÚN LOS PROTOCOLOS ESTABLECIDOS EN LA ORGANIZACIÓN.');
        $Resultado17->Estado=('1');
        $Resultado17->Codigo_comp=('220501007');
        $Resultado17->save();
        //////////////////////////////
        //////---3_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        //////////CONSTRUIR///////////
        //////////////////////////////
        $Resultado18=new Resultado();
        $Resultado18->Resultados=('CONSTRUIR LA INTERFAZ DE USUARIO, APOYADO EN LA EVALUACIÓN DEL PROTOTIPO, DETERMINANDO LAS ENTRADAS Y SALIDAS REQUERIDAS EN EL DISEÑO Y DEFINIENDO LOS LINEAMIENTOS PARA LA NAVEGACIÓN, DE ACUERDO CON LAS NECESIDADES DEL USUARIO.');
        $Resultado18->Estado=('1');
        $Resultado18->Codigo_comp=('220501007');
        $Resultado18->save();
        //////////////////////////////
        $Resultado19=new Resultado();
        $Resultado19->Resultados=('REALIZAR LA CODIFICACIÓN DE LOS MÓDULOS DEL SISTEMA Y EL PROGRAMA PRINCIPAL, A PARTIR DE LA UTILIZACIÓN DEL LENGUAJE DE PROGRAMACIÓN SELECCIONADO, DE ACUERDO CON LAS ESPECIFICACIONES DEL DISEÑO.');
        $Resultado19->Estado=('1');
        $Resultado19->Codigo_comp=('220501007');
        $Resultado19->save();
        //////////////////////////////
        $Resultado20=new Resultado();
        $Resultado20->Resultados=('CONSTRUIR EL PROGRAMA DE INSTALACIÓN DEL APLICATIVO, UTILIZANDO LAS HERRAMIENTAS DE DESARROLLO DISPONIBLES EN EL MERCADO, SEGÚN LAS CARACTERÍSTICAS DE LA ARQUITECTURA DE LA SOLUCIÓN.');
        $Resultado20->Estado=('1');
        $Resultado20->Codigo_comp=('220501007');
        $Resultado20->save();
        //////////////////////////////
        ///////////APLICAR////////////
        //////////////////////////////
        $Resultado21=new Resultado();
        $Resultado21->Resultados=('IDENTIFICAR LAS CARACTERISTICAS DE LOS PROCESOS DE DESARROLLO DE SOFTWARE, FRENTE AL REFERENTE DE CALIDAD ADOPTADO  POR LA EMPRESA, AJUSTANDOLOS A LOS RESULTADOS DE LAS EDICIONES,  EDICIONES Y RECOMENDACIONES REALIZADAS.');
        $Resultado21->Estado=('1');
        $Resultado21->Codigo_comp=('220501035');
        $Resultado21->save();
        //////////////////////////////
        $Resultado22=new Resultado();
        $Resultado22->Resultados=('EVALUAR PROCESOS Y PRODUCTOS DE DESARROLLO DE SOFTWARE, DOCUMENTAR Y CONCERTAR ACCIONES A SEGUIR, PARA GARANTIZAR EL CUMPLIMIENTO DE LAS NORMAS ESTABLECIDAS, DE ACUERDO CON EL PLAN DEFINIDO Y CON LOS CRITERIOS DE MEDICIÓN, MÉTRICO Y POLÍTICO DETERMINADOS POR LA EMPRESA.');
        $Resultado22->Estado=('1');
        $Resultado22->Codigo_comp=('220501035');
        $Resultado22->save();
        //////////////////////////////
        $Resultado23=new Resultado();
        $Resultado23->Resultados=('APLICAR LOS ESTÁNDARES DE CALIDAD INVOLUCRADOS EN LOS PROCESOS DE DESARROLLO DE SOFTWARE, SIGUIENDO EL PLAN ESTABLECIDO PARA MANTENER LA INTEGRIDAD DE LOS PRODUCTOS DE TRABAJO  DEFINIDOS, SEGÚN LAS PRÁCTICAS DE CONFIGURACIÓN ESTABLECIDAS POR LA EMPRESA.');
        $Resultado23->Estado=('1');
        $Resultado23->Codigo_comp=('220501035');
        $Resultado23->save();
        //////////////////////////////
        $Resultado24=new Resultado();
        $Resultado24->Resultados=('ELABORAR EL INFORME FINAL DEL PROCESO DE GESTIÓN DE CALIDAD EN EL DESARROLLO DE SOFTWARE, QUE CONSOLIDE LA INFORMACIÓN DE LAS EVIDENCIAS, HALLAZGOS Y NOVEDADES FRENTE AL SEGUIMIENTO Y CONTROL DE LOS PRODUCTOS, SEGÚN NORMAS INTERNACIONALES Y PROTOCOLOS DE LA ORGANIZACIÓN.');
        $Resultado24->Estado=('1');
        $Resultado24->Codigo_comp=('220501035');
        $Resultado24->save();
        //////////////////////////////
        $Resultado25=new Resultado();
        $Resultado25->Resultados=('ELABORAR INSTRUMENTOS E INSTRUCTIVOS, REQUERIDOS POR EL ASEGURAMIENTO DE LA CALIDAD, PARA DOCUMENTAR Y EVALUAR LOS PROCESOS DE DESARROLLO DE SOFTWARE, DE ACUERDO CON LAS NORMAS Y PROCEDIMIENTOS ESTABLECIDAS POR LA EMPRESA.');
        $Resultado25->Estado=('1');
        $Resultado25->Codigo_comp=('220501035');
        $Resultado25->save();
        //////////////////////////////
        $Resultado26=new Resultado();
        $Resultado26->Resultados=('IDENTIFICAR LOS PUNTOS CRÍTICOS DE CONTROL EN LOS PROCESOS DE DESARROLLO DE SOFTWARE, PARA ESTABLECER LAS ACCIONES A SEGUIR, GARANTIZANDO EL CUMPLIMIENTO DE LOS ESTÁNDARES DE CALIDAD, SIGUIENDO LOS LINEAMIENTOS ESTABLECIDOS POR LA ORGANIZACIÓN.');
        $Resultado26->Estado=('1');
        $Resultado26->Codigo_comp=('220501035');
        $Resultado26->save();
        //////////////////////////////
        //////---4_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        //////////CONSTRUIR///////////
        //////////////////////////////
        $Resultado27=new Resultado();
        $Resultado27->Resultados=('EJECUTAR Y DOCUMENTAR LAS PRUEBAS DEL SOFTWARE, APLICANDO TÉCNICAS DE ENSAYO-ERROR, DE ACUERDO CON EL PLAN DISEÑADO Y LOS PROCEDIMIENTOS ESTABLECIDOS POR LA EMPRESA.');
        $Resultado27->Estado=('1');
        $Resultado27->Codigo_comp=('220501007');
        $Resultado27->save();
        //////////////////////////////
        $Resultado28=new Resultado();
        $Resultado28->Resultados=('ELABORAR EL MANUAL TÉCNICO DE LA APLICACIÓN, DE ACUERDO CON LA COMPLEJIDAD DEL APLICATIVO Y SEGÚN NORMAS Y PROCEDIMIENTOS ESTABLECIDOS POR LA EMPRESA.');
        $Resultado28->Estado=('1');
        $Resultado28->Codigo_comp=('220501007');
        $Resultado28->save();
        //////////////////////////////
        //////////IMPLANTAR///////////
        //////////////////////////////
        $Resultado29=new Resultado();
        $Resultado29->Resultados=('CONFIGURAR EL SOFTWARE DE LA APLICACIÓN PARA CLIENTE Y SERVIDOR, MEDIANTE LA UTILIZACIÓN DEL HARDWARE DISPONIBLE, EJECUTÁNDOLA EN LA PLATAFORMA TECNOLÓGICA, SEGÚN NORMAS Y PROTOCOLOS ESTABLECIDOS POR LA EMPRESA.');
        $Resultado29->Estado=('1');
        $Resultado29->Codigo_comp=('220501034');
        $Resultado29->save();
        //////////////////////////////
        $Resultado30=new Resultado();
        $Resultado30->Resultados=('ELABORAR EL INFORME ADMINISTRATIVO, SIGUIENDO LOS PROTOCOLOS DE LA ORGANIZACIÓN, BASADO EN LOS PLANES DE INSTALACIÓN, RESPALDO Y MIGRACIÓN DEL SISTEMA DE INFORMACIÓN, FACILITANDO LA OPERATIVIDAD Y MANTENIMIENTO DE LA SOLUCIÓN INFORMÁTICA.');
        $Resultado30->Estado=('1');
        $Resultado30->Codigo_comp=('220501034');
        $Resultado30->save();
        //////////////////////////////
        $Resultado31=new Resultado();
        $Resultado31->Resultados=('ELABORAR INFORMES TÉCNICOS RELACIONADOS CON LA SOLUCIÓN INFORMÁTICA IMPLANTADA, DE ACUERDO CON LAS PROPUESTAS DE ALTERNATIVAS APLICADAS, TENIENDO EN CUENTA LAS TÉCNICAS DE COMUNICACIÓN Y SEGÚN NORMAS Y PROTOCOLOS ESTABLECIDOS.');
        $Resultado31->Estado=('1');
        $Resultado31->Codigo_comp=('220501034');
        $Resultado31->save();
        //////////////////////////////
        $Resultado32=new Resultado();
        $Resultado32->Resultados=('DEFINIR ESTRATEGIAS PARA LA VALIDACIÓN DE MANUALES DE USUARIO Y DE OPERACIÓN, RESPONDIENDO A LAS NECESIDADES Y SATISFACCIÓN DEL CLIENTE, FRENTE A LA SOLUCIÓN INFORMÁTICA PROPUESTA, SEGÚN POLÍTICAS DE LA ORGANIZACIÓN.');
        $Resultado32->Estado=('1');
        $Resultado32->Codigo_comp=('220501034');
        $Resultado32->save();
        //////////////////////////////
        $Resultado33=new Resultado();
        $Resultado33->Resultados=('CAPACITAR A LOS USUARIOS DEL SISTEMA, SOBRE LA ESTRUCTURACIÓN Y EL MANEJO DEL APLICATIVO, DE ACUERDO CON EL PLAN ESTABLECIDO, EL PERFIL DE LOS USUARIOS, SEGÚN POLÍTICAS DE LA ORGANIZACIÓN.');
        $Resultado33->Estado=('1');
        $Resultado33->Codigo_comp=('220501034');
        $Resultado33->save();
        //////////////////////////////
        /////////PARTICIPAR///////////
        //////////////////////////////
        $Resultado34=new Resultado();
        $Resultado34->Resultados=('PARTICIPAR EN LOS PERFECCIONAMIENTOS DE CONTRATOS INFORMÁTICOS, ESTABLECIENDO CLÁUSULAS TÉCNICAS, QUE RESPONDAN A LAS NECESIDADES DE LOS ACTORES DE LA NEGOCIACIÓN, DE ACUERDO CON LA LEY DE CONTRATACIÓN.');
        $Resultado34->Estado=('1');
        $Resultado34->Codigo_comp=('220501009');
        $Resultado34->save();
        //////////////////////////////
        $Resultado35=new Resultado();
        $Resultado35->Resultados=('DEFINIR ESTRATEGIAS PARA LA ELABORACIÓN DE TÉRMINOS DE REFERENCIA Y PROCESOS DE EVALUACIÓN DE PROVEEDORES, EN LA ADQUISICIÓN DE TECNOLOGÍA, SEGÚN PROTOCOLOS ESTABLECIDOS.');
        $Resultado35->Estado=('1');
        $Resultado35->Codigo_comp=('220501009');
        $Resultado35->save();
        //////////////////////////////
        $Resultado36=new Resultado();
        $Resultado36->Resultados=('ELABORAR EL INFORME SOBRE EL CUMPLIMIENTO DE LOS TÉRMINOS DE REFERENCIA PREVISTOS EN LA NEGOCIACIÓN, DE ACUERDO CON LA PARTICIPACIÓN DE CADA UNO DE LOS ACTORES EN RELACIÓN CON LA SATISFACCIÓN DE LOS BIENES INFORMÁTICOS CONTRATADOS Y RECIBIDOS, SEGÚN NORMAS Y PROTOCOLOS DE LA ORGANIZACIÓN.');
        $Resultado36->Estado=('1');
        $Resultado36->Codigo_comp=('220501009');
        $Resultado36->save();
    }
}

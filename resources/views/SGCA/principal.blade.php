@extends('layouts.plantilla')
@section('name')

{{-- <body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" bottommargin="0" rightmargin="0"
    style="text-align:center"> --}}

<body>
    <div align="center">
        <table style="border-collapse: collapse;" id="AutoNumber1" border="0" cellpadding="0" cellspacing="0"
            width="600">
            <tbody>
                <tr>
                    <td align="center">
                        <div>
                            <marquee>
                                <font size="6">Sistema de Gestión de Calidad</font>
                            </marquee>
                            &nbsp;
                            <map name="FPMap1">
                                <area href="{{asset('Documentos/SIGCUNSCH_MANUALCALIDAD.pdf')}}" shape="rect"
                                    coords="29, 127, 163, 197" target="_blank">

                                <area href="{{asset('Documentos/SIGCUNSCH_PD01.pdf')}}" shape="rect"
                                    coords="291, 220, 437, 265" target="_blank">

                                <area href="{{asset('Documentos/SIGCUSNCH_PD02nuevo.PDF')}}" shape="rect"
                                    coords="289, 291, 441, 339" target="_blank">

                                {{-- pd03 --}}
                                <area href="{{asset('Documentos/AuditoriaInternav1.pdf')}}" shape="rect"
                                    coords="291, 366, 440, 416" target="_blank">

                                <area href="{{asset('Documentos/SalidaNoConformev1.pdf')}}" shape="rect"
                                    coords="291, 433, 439, 490" target="_blank">

                                {{-- pd05 --}}
                                <area href="{{asset('Documentos/AcccionCorrectivav1.pdf')}}" shape="rect"
                                    coords="292, 516, 441, 563" target="_blank">
                                {{-- pd06 --}}
                                <area href=" {{asset('Documentos/Gestion_de_a_Mejora_Continuav1.pdf')}}" shape="rect"
                                    coords="292, 592, 442, 648" target="_blank">

                                {{-- pd07 --}}
                                <area href="{{asset('Documentos/Determincion_politicav1.pdf')}}" shape="rect"
                                    coords="292, 650, 441, 715" target="_blank">
                                {{-- pd08 --}}
                                <area href=" {{asset('Documentos/Objetivocalidadv1.pdf')}}" shape="rect"
                                    coords="292, 700, 442, 790" target="_blank">


                                {{-- pe01 --}}
                                <area href="{{asset('SIGCSUA_PE01.pdf')}}" shape="rect" coords="580, 266, 939, 286"
                                    target="_blank">
                                {{-- PE02 --}}
                                <area href="{{asset('SIGCSUA_PE02.pdf')}}" shape="rect" coords="581, 288, 940, 305"
                                    target="_blank">
                                {{-- PM01 --}}
                                <area href="{{asset('Documentos/PM01.pdf')}}" shape="rect" coords="582, 377, 949, 395"
                                    target="_blank">
                                {{-- <area  href="SIGCSUA_PC02.pdf"shape="rect" coords="582, 396, 951, 412"  target="_blank"> --}}
                                <area href="{{asset('Documentos/PM02.pdf')}}" shape="rect" coords="582, 415, 945, 429"
                                    target="_blank">
                                {{-- <area href="SIGCSUA_PC04.pdf" shape="rect" coords="582, 428, 941, 446" target="_blank"> --}}
                                <area href="{{asset('Documentos/PM03.pdf')}}" shape="rect" coords="580, 448, 939, 464"
                                    target="_blank">
                                {{-- <area href="SIGCSUA_PC06.pdf" shape="rect" coords="585, 466, 956, 485" target="_blank"> --}}
                                <area href="{{asset('Documentos/PM04.pdf')}}" shape="rect" coords="586, 487, 940, 516"
                                    target="_blank">
                                <area href="{{asset('Documentos/PM05.pdf')}}" shape="rect" coords="585, 518, 914, 551"
                                    target="_blank">
                                {{-- <area href="SIGCSUA_PC09.pdf" shape="rect" coords="586, 552, 910, 570" target="_blank"> --}}
                                <area href="{{asset('Documentos/PM06.pdf')}}" shape="rect" coords="586, 571, 968, 606"
                                    target="_blank">
                                <area href="{{asset('Documentos/PM07.pdf')}}" shape="rect" coords="584, 610, 986, 645"
                                    target="_blank">
                                <area href="SIGCSUA_PC12.pdf" shape="rect" coords="586, 645, 967, 666" target="_blank">
                                <area href="SIGCSUA_PD01.pdf" shape="rect" coords="577, 743, 851, 763" target="_blank">
                                <area href="SIGCSUA_PD02nuevo.PDF" shape="rect" coords="581, 763, 832, 780"
                                    target="_blank">
                                <area href="SIGCSUA_PD03.pdf" shape="rect" coords="582, 780, 831, 797" target="_blank">
                                <area href="SIGCSUA_PD04.pdf" shape="rect" coords="584, 795, 933, 815" target="_blank">
                                <area href="Anexo 08.04 PE.04.04.10 Acccion Correctiva.pdf" shape="rect"
                                    coords="585, 816, 809, 831" target="_blank">
                                <area href="SIGCSUA_PD06.pdf" shape="rect" coords="583, 834, 910, 855" target="_blank">
                                <area href="Politica_de_Calidad.pdf" shape="rect" coords="34, 250, 162, 314"
                                    target="_blank">
                                <area href="SIGCSUA-ANEXO-RPT.pdf" shape="rect" coords="883, 124, 1032, 192"
                                    target="_blank">
                                <area href="plan_seguridad/PLAN_SEGURIDAD_DOCUMENTAL_SIGCSUA.pdf" shape="rect"
                                    coords="736, 121, 871, 192" target="_blank">
                                {{-- mapa de procesos --}}
                                <area href="plancomunicacion.html" shape="rect" coords="585, 123, 717, 191">
                            </map>
                            <img border="0" src="{{asset('imagenes/indexfinal.png')}}" width="1064" height="882"
                                usemap="#FPMap1">

                        </div>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>
@endsection
<? php
devolver [
    / *
    | ------------------------------------------------- -------------------------
    | Validación de líneas de lenguaje
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | La clase validadora. Algunas de estas reglas tienen múltiples versiones tales
    | tales como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    |
    * /
    ' aceptado '              =>  ' : atributo debe ser aceptado. ' ,
    ' active_url '            =>  ' : attribute no es una URL válida. ' ,
    ' after '                 =>  ' : attribute debe ser una fecha posterior a: date. ' ,
    ' alpha '                 =>  ' : atributo solo debe contener letras. ' ,
    ' alpha_dash '            =>  ' : atributo solo debe contener letras, números y guiones. ' ,
    ' alpha_num '             =>  ' : atributo solo debe contener letras y números. ' ,
    ' array '                 =>  ' : attribute debe ser un conjunto. ' ,
    ' antes '                =>  ' : atributo debe ser una fecha anterior a: fecha. ' ,
    ' entre '               => [
        ' numeric '  =>  ' : atributo tiene que estar entre: min -: max. ' ,
        ' file '     =>  ' : attribute debe pesar entre: min -: max kilobytes. ' ,
        ' string '   =>  ' : atributo tiene que tener entre: min -: max caracteres. ' ,
        ' array '    =>  ' : atributo tiene que tener entre: min -: max ítems. ' ,
    ]
    ' boolean '               =>  ' El campo: atributo debe tener un valor verdadero o falso. ' ,
    ' confirmado '             =>  ' La confirmación de: atributo no coincide. ' ,
    ' fecha '                  =>  ' : atributo no es una fecha válida. ' ,
    ' date_format '           =>  ' : attribute no corresponde al formato: format. ' ,
    ' diferente '             =>  ' : atributo y: otros deben ser diferentes. ' ,
    ' dígitos '                =>  ' : atributo debe tener: dígitos dígitos. ' ,
    ' digit_between '        =>  ' : atributo debe tener entre: min y: max dígitos. ' ,
    ' distinct '              =>  ' El campo: atributo contiene un valor duplicado. ' ,
    ' email '                 =>  ' : atributo no es un correo válido ' ,
    ' existe '                =>  ' : atributo es inválido. ' ,
    ' relleno '                =>  ' El campo: atributo es obligatorio. ' ,
    ' imagen '                 =>  ' : atributo debe ser una imagen. ' ,
    ' in '                    =>  ' : atributo es inválido. ' ,
    ' in_array '              =>  ' El campo: attribute no existe en: other. ' ,
    ' integer '               =>  ' : attribute debe ser un número entero. ' ,
    ' ip '                    =>  ' : atributo debe ser una dirección IP válida. ' ,
    ' json '                  =>  ' El campo: atributo debe tener una cadena JSON válida. ' ,
    ' max '                   => [
        ' numérico '  =>  ' : atributo no debe ser mayor a: máx. ' ,
        ' archivo '     =>  ' : atributo no debe ser mayor que: max kilobytes. ' ,
        ' string '   =>  ' : atributo no debe ser mayor que: max caracteres. ' ,
        ' array '    =>  ' : atributo no debe tener más de: max elementos. ' ,
    ]
    ' mimes '                 =>  ' : attribute debe ser un archivo con formato:: valores. ' ,
    ' min '                   => [
        ' numérico '  =>  ' El tamaño de: atributo debe ser de al menos: min. ' ,
        ' file '     =>  ' El tamaño de: attribute debe ser de al menos: min kilobytes. ' ,
        ' string '   =>  ' : attribute debe contener al menos: min caracteres. ' ,
        ' array '    =>  ' : attribute debe tener al menos: min elementos. ' ,
    ]
    ' not_in '                =>  ' : atributo es inválido. ' ,
    ' numérico '               =>  ' : atributo debe ser numérico. ' ,
    ' presente '               =>  ' El campo: atributo debe estar presente. ' ,
    ' regex '                 =>  ' El formato de: attribute es inválido. ' ,
    ' requerido '              =>  ' El campo: atributo es obligatorio. ' ,
    ' required_if '           =>  ' El campo: attribute es obligatorio cuando: other es: value. ' ,
    ' required_unless '       =>  ' El campo: attribute es obligatorio a menos que: other esté en: values. ' ,
    ' required_with '         =>  ' El campo: attribute es obligatorio cuando: values ​​está presente. ' ,
    ' required_with_all '     =>  ' El campo: attribute es obligatorio cuando: values ​​está presente. ' ,
    ' required_without '      =>  ' El campo: atributo es obligatorio cuando: valores no está presente. ' ,
    ' required_without_all '  =>  ' El campo: atributo es obligatorio cuando ninguno de: valores están presentes. ' ,
    ' same '                  =>  ' : atributo y: otros deben coincidir. ' ,
    ' tamaño '                  => [
        ' numeric '  =>  ' El tamaño de: attribute debe ser: size. ' ,
        ' file '     =>  ' El tamaño de: attribute debe ser: tamaño kilobytes. ' ,
        ' string '   =>  ' : attribute debe contener: size caracteres. ' ,
        ' array '    =>  ' : attribute debe contener: size elementos. ' ,
    ]
    ' string '                =>  ' El campo: attribute debe ser una cadena de caracteres. ' ,
    ' timezone '              =>  ' El: attribute debe ser una zona válida. ' ,
    ' único '                =>  ' : atributo ya ha sido registrado. ' ,
    ' url '                   =>  ' El formato: atributo es inválido. ' ,
    ' captcha '               =>  ' El código captcha ingresado no es correcto ' ,
    / *
    | ------------------------------------------------- -------------------------
    | Validación personalizada de líneas de lenguaje
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando la
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo dada.
    |
    * /
    ' custom '                => [
        ' nombre-atributo '  => [
            ' rule-name '  =>  ' custom-message ' ,
        ]
    ]
    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar los marcadores de posición de atributo.
    | con algo más fácil de leer, como la dirección de correo electrónico.
    | de "email". Esto simplemente nos ayuda a hacer los mensajes un poco más limpios.
    |
    * /
    ' atributos '            => [
        ' nombre '                   =>  ' nombre ' ,
        ' username '               =>  ' usuario ' ,
        ' email '                  =>  ' correo electrónico ' ,
        ' first_name '             =>  ' nombre ' ,
        ' last_name '              =>  ' apellido ' ,
        ' contraseña '               =>  ' contraseña ' ,
        ' password_confirmation '  =>  ' confirmación de la contraseña ' ,
        ' ciudad '                   =>  ' ciudad ' ,
        ' país '                =>  ' país ' ,
        ' dirección '                =>  ' dirección ' ,
        ' teléfono '                  =>  ' teléfono ' ,
        ' móvil '                 =>  ' celular ' ,
        ' edad '                    =>  ' edad ' ,
        ' sexo '                    =>  ' sexo ' ,
        ' género '                 =>  ' género ' ,
        ' año '                   =>  ' año ' ,
        ' mes '                  =>  ' mes ' ,
        ' día '                    =>  ' día ' ,
        ' hora '                   =>  ' hora ' ,
        ' minuto '                 =>  ' minuto ' ,
        ' segundo '                 =>  ' segundo ' ,
        ' título '                  =>  ' título ' ,
        ' cuerpo '                   =>  ' contenido ' ,
        ' description '            =>  ' descripción ' ,
        ' extracto '                =>  ' extracto ' ,
        ' fecha '                   =>  ' fecha ' ,
        ' tiempo '                   =>  ' hora ' ,
        ' subject '                =>  ' asunto ' ,
        ' mensaje '                =>  ' mensaje ' ,
        ' required '               =>  ' Requerido ' ,
    ]
];
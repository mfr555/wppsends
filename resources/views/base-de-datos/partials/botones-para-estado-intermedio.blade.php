Resultado inmediato:
<br>
<a href="/comunicacion-contacto-actualizar?contacto_id={{ $contacto->id }}&comunicacion_id={{ $comunicacion->id }}&recepcion=Enviado"
    class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Enviado</span>
</a>

<a href="/comunicacion-contacto-delete?contacto_id={{ $contacto->id }}&comunicacion_id={{ $comunicacion->id }}"
    class="btn btn-warning btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-trash"></i>
    </span>
    <span class="text">Cancelado</span>
</a>

<a href="/comunicacion-contacto-actualizar?contacto_id={{ $contacto->id }}&comunicacion_id={{ $comunicacion->id }}&recepcion=Error"
    class="btn btn-danger btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-exclamation-triangle"></i>
    </span>
    <span class="text">Error al enviar</span>
</a>

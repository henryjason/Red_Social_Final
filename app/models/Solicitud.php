
<?php

class Solicitud extends Eloquent
{
    protected $table      = 'hums';
    protected $fillable   = array('usuario_id', 'mensaje', 'created_at', 'estado');
    protected $guarded    = array('id');
    public    $timestamps = false;

 public static function ejemplo()
    {
        return DB::select("select * from music");
    }


    

}



create table menciones(
	id serial not null primary key,
	mensaje_id integer not null,
	usuario_id integer not null,
	created_at date NOT NULL default CURRENT_DATE,
	estado integer not null,
	constraint fk_menciones_usuario foreign key (usuario_id) references users(id),
	constraint fk_menciones_mensaje foreign key (mensaje_id) references hums(id)
	
);

create table hashtag(
	id serial not null primary key,
	mensaje_id integer not null,
	hashtag varchar not null,
	created_at date NOT NULL default CURRENT_DATE,
	constraint fk_hashtag_mensaje foreign key (mensaje_id) references hums(id)
	
);



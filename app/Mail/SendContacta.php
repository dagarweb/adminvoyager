<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\ContactaController;

class SendContacta extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;
   /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $telefono, $email, $mensaje)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }

    /**
     * Create a new message instance.
     *
     * @return void
     */
/*
    public function store(Request $request)
    {
        Mail::send('emails.sendcontacta', $request->all(), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('info@restaurantedems.com');
            });
        Session::flash('message', 'Mensaje envido correctamente');
        return Redirect::to('contacta');
    }
*/
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@dagarweb.com')
            ->view('emails.sendcontacta')
            ->with('name', 'Diseño Web Dggarweb')
            ->from('info@dagarweb.com', 'Diseño Web Dggarweb')
            ->subject('Nueva consulta desde la web');
    }
}

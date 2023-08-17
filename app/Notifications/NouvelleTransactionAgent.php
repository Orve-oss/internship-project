<?php

namespace App\Notifications;

use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NouvelleTransactionAgent extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $transaction;
    public function __construct($transaction)
    {
        //
        $this->transaction = $transaction;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */

     /* public function toMail($notifiable)
     {

     } */
    public function toDatabase($notifiable)
    {
        return [
            'message'=> 'Nouvelle transaction enregistrée : ',
            'type_transaction'=> $this->transaction->type_transaction->libelle,
            'user_name'=> $this->transaction->user->name,
            'kiosque_nom'=> $this->transaction->kiosque->nom,
            'nom_expediteur'=> $this->transaction->nom_expediteur,
            'nom_destinataire'=> $this->transaction->nom_destinataire,
            'numero_destinataire'=> $this->transaction->numero_destinataire,
            'type_compte'=> $this->transaction->type_compte->libelle,
            'montant'=> $this->transaction->montant,
            'numero_expediteur'=> $this->transaction->numero_expediteur,
        ];




    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //

        ];
    }
}

<?php

namespace App\Mail;

use App\Models\Settings;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvite extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\User
     */
    public $user;

    /**
     * @var string
     */
    public $invite;

    /**
     * @var mixed
     */
    private $siteEmail;

    /**
     * @var mixed
     */
    private $siteTitle;

    /**
     * SendInvite constructor.
     *
     * @param \App\Models\User $user
     * @param                  $invite
     */
    public function __construct($user, $invite)
    {
        $this->user = $user;
        $this->invite = $invite;
        $this->siteEmail = Settings::settingValue('site.main.email');
        $this->siteTitle = Settings::settingValue('site.main.title');
    }

    /**
     * Build the message.
     *
     * @return $this
     * @throws \Exception
     */
    public function build()
    {
        return $this->from($this->siteEmail)->subject('Invite received')->view('emails.sendinvite')->with(['invite' => $this->invite, 'username' => $this->user['username'], 'site' => $this->siteTitle, 'email' => $this->user['email']]);
    }
}

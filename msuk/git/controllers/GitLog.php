<?php namespace Msuk\Git\Controllers;

use Backend\Classes\Controller;
use BackendMenu, Backend, BackendAuth, Flash;
use Msuk\Git\Models\GitLog as Log;
use Msuk\Git\Models\Settings;
use Msuk\Git\Libraries\Git;

class GitLog extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Msuk.Git', 'main-menu-item');
    }

    public function onPublishGit()
    {
        return $this->makePartial(plugins_path('/msuk/git/controllers/gitlog/delete'));
    }

    public function onCommentGit()
    {

    }

    public function onSendCommentGit()
    {
        $comment    = post('Post[comment]');

        $repo = Git::open(base_path());
        $repo->add('--all');
        $repo->commit( $comment);
        $repo->push('origin', 'master');

        $user           = BackendAuth::getUser();
        $log            = new Log();
        $log->comment   = $comment;
        $log->user_id   = $user->id;
        $log->save();

        Flash::success('Cambios enviados a producción.');
        return Backend::redirect('/msuk/git/gitlog');
    }

    public function listExtendQuery($query) {
        $query->orderBy('id','desc');
    }


}

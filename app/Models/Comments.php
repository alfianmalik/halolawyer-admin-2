<?php

namespace App\Models;

/**
 * Class Comment
 *
 * @package App\Models
 * @author Alfian Maualana Malik <alfian.malik@gmail.com>
 */
use Corcel\Model\Comment as Corcel;

class Comments extends Corcel
{

    /**
     * @var array
     */
	protected $guarded = [];

    /**
     * @return mixed
     */
    public function scopeGetAllCommentParent()
    {
        return $this->whereCommentParent(0);
    }

    /**
     * @return mixed
     */
    public function scopeGetAllCommentParentApproved()
    {
        return $this->whereCommentParent(0)->whereCommentApproved(1);
    }

    /**
     * @param $req
     */
    public function reply($req)
    {

    }

    public function updateReply($req)
    {

    }
}

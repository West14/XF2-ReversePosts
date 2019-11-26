<?php

namespace West\ReversePosts\XF\Repository;

class Post extends XFCP_Post
{
    public function findPostsForThreadView(\XF\Entity\Thread $thread, array $limits = [])
    {
        return parent::findPostsForThreadView($thread, $limits)
            ->resetOrder()
            ->orderByDate('DESC');
    }
}
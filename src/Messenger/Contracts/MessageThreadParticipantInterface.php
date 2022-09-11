<?php

namespace Messenger\Contracts;

interface MessageThreadParticipantInterface
{
    public function thread();
    public function user();
}

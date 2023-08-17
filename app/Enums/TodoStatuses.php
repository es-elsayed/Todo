<?php
namespace App\Enums;

enum TodoStatuses: string {
    case COMPLETED = 'completed';
    case OPENED = 'opened';
}

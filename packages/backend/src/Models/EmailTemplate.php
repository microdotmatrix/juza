<?php

namespace Juzaweb\Backend\Models;

use Juzaweb\Models\Model;
use Juzaweb\Traits\ResourceModel;

/**
 * Juzaweb\Backend\Models\EmailTemplate
 *
 * @property int $id
 * @property string $code
 * @property string $subject
 * @property string $body
 * @property array|null $params
 * @property string|null $layout
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $email_hook
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereEmailHook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereFilter($params = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EmailTemplate extends Model
{
    use ResourceModel;

    protected $fieldName = 'subject';
    protected $table = 'email_templates';
    protected $fillable = [
        'code',
        'subject',
        'body',
        'params',
        'email_hook',
    ];

    protected $casts = [
        'params' => 'array',
    ];
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
     * A role may be associated with one user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Show whether the attribute is unique
     * 
     * @return bool
     */
    public function isUnique()
    {
        return (bool) $this->is_unique;
    }
}

<?php 
public function scopeFilter($query, $search)
    {
        $query->when($search, function ($query) use ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
            $query->orWhere('target', 'LIKE', '%' . $search . '%');
        });

        return $query;
    }
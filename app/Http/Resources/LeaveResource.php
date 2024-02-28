<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id'                                => $this->id,
            'type'                              => $this->type,
            'total_days'                        => $this->total_days,
            'reason'                            => $this->reason,
            'starting_date'                     => $this->starting_date,
            'resumption_date'                   => $this->resumption_date,
            'user_id'                           => $this->user_id,
            'recommending_authority_status'     => $this->recommending_authority_status,
            'recommending_authority_id'         => $this->recommending_authority_id,
            'recommending_date'                 => $this->recommending_date,
            'approving_authority_status'        => $this->approving_authority_status,
            'approving_authority_id'            => $this->approving_authority_id,
            'approving_date'                    => $this->approving_date,
            'status_active'                     => $this->status_active,
            'is_delete'                         => $this->is_delete,
        ];
    }
}

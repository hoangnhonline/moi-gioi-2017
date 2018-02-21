<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CtvJoinSale extends Model  {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'ctv_join_sale';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'ctv_id',
      'product_id',
      'type_sale',
      'status_join',
      'status_sales',
      'commission_start',
      'commission_end',
      'updated_user',
      'full_name',
      'cmnd',
      'phone',
      'address',
      'vung_quan_tam',
      'nhu_cau',
      'loai_bds'
    ];
}

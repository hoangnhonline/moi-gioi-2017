<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class JoinSave extends Model  {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'customers_join_sale';

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
      'customer_id',
      'product_id',
      'type_sale',
      'status_join',
      'status_sales',
      'commission_start',
      'commission_end',
      'updated_user'
    ];
}

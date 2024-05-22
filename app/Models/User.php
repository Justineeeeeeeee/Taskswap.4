<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'username',
        'bio',
        'age',
        'gender',
        'location',
        'education',
        'skills',
        'rating',
        'reviews',
        'terms',
        'notes',
        'user_type',
        'Cash_In_Image',
        'Cash_out_Image',

         //FOR THE GAMES
         'token_balance', // Add token_balance to mass assignable attributes
         'token_clicked', // Add token clicked to mass assignable attributes
         'last_token_click_time', // Add last_token_click_time to mass assignable attributes
         'conversion_balance', // Add conversion_balance to mass assignable attributes
         'last_spin_time', // Add last_spin_time to mass assignable attributes
         'last_post_time', // Add last_spin_time to mass assignable attributes
         'last_save_time', // Add last_save_time to mass assignable attributes
         'login_time', // Add last_save_time to mass assignable attributes

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

        //FOR THE GAMES
        'token_clicked' => 'boolean', //add
        'last_token_click_time' => 'datetime', //add
        'conversion_balance' => 'integer', //add
        'last_spin_time' => 'datetime', //add
        'last_post_time' => 'datetime', //add
        'last_save_time' => 'datetime', //add
        'login_time' => 'timestamp', //add
    ];


        // FOR GAMES

        protected $attributes = [
            'token_clicked' => false, // Set default value for token_clicked attribute
        ];

        /**
         * Accessor for token_clicked attribute.
         *
         * @param  mixed  $value
         * @return string
         */
        public function getTokenClickedAttribute($value)
        {
            return (bool) $value; // Cast to boolean
        }

        /**
         * Mutator for token_clicked attribute.
         *
         * @param  mixed  $value
         * @return void
         */
        public function setTokenClickedAttribute($value)
        {
            $this->attributes['token_clicked'] = $value;
        }

        /**
         * Accessor for token_balance attribute.
         *
         * @param  mixed  $value
         * @return string
         */
        public function getTokenBalanceAttribute($value)
        {
            return number_format($value, 2); // Format value
        }

         // Mutator for last_token_click_time attribute
         public function setLastTokenClickTimeAttribute($value)
         {
             $this->attributes['last_token_click_time'] = $value;
         }

         // Mutator for last_spin_time attribute
         public function setLastSpinTimeAttribute($value)
         {
             $this->attributes['last_spin_time'] = $value;
         }

         // Mutator for last_post_time attribute
         public function setLastPostTimeAttribute($value)
         {
             $this->attributes['last_post_time'] = $value;
         }

         // Mutator for last_save_time attribute
         public function setLastSaveTimeAttribute($value)
         {
             $this->attributes['last_save_time'] = $value;
         }
         // Mutator for login_time attribute
         public function setLoginTimeAttribute($value)
         {
             $this->attributes['login_time'] = $value;
         }


        /**
         * Mutator for token_balance attribute.
         *
         * @param  mixed  $value
         * @return void
         */
        public function setTokenBalanceAttribute($value)
        {
        // You may want to format/set restrictions on this value if needed
        $this->attributes['token_balance'] = $value;
        }

        //END FOR GAMES




        // START OF SAVE FUNCTION FOR GAMES

           /**
         * Override the save method to handle token balance updating.
         *
         * @param  array  $options
         * @return bool
         */
        public function save(array $options = [])
    {
        // Increment the token balance by 1
        $this->last_spin_time = now();

        $this->attributes['conversion_balance'] = $this->conversion_balance;

        // Call the parent save method to save the user
        return parent::save($options);
    }

        // END OF SAVE FUNCTION FOR GAMES




            // FOR CONVERSION OF BALANCE

            // FOR CONVERSION OF BALANCE

    public function isCitizen()
    {
        return $this->role === 'citizen';
    }

    public function isHero()
    {
        return $this->role === 'hero';
    }

    public function getMessageCount(){
        if(auth()->check()){
            $count = ChMessage::where('to_id',auth()->id())->where('seen','0')->count();
            return $count;
        }
    }





}

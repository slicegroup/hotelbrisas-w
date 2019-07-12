# This migration comes from keppler_booking (originally 20190527165959)
class CreateKepplerBookingReservations < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_reservations do |t|
      t.string :name
      t.string :email
      t.integer :adults
      t.integer :kids
      t.integer :babies
      t.string :origin
      t.string :motive
      t.date :checkin
      t.date :checkout
      t.integer :payment
      t.text :observations
      t.float :total_price
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end

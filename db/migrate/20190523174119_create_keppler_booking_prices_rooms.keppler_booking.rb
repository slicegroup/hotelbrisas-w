# This migration comes from keppler_booking (originally 20190523174117)
class CreateKepplerBookingPricesRooms < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_prices_rooms do |t|
      t.integer :room_id
      t.integer :price
      t.integer :amount_people
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end

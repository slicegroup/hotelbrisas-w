# This migration comes from keppler_booking (originally 20190814154419)
class AddPriceToRoom < ActiveRecord::Migration[5.2]
  def change
    add_column :keppler_booking_rooms, :price, :string
  end
end

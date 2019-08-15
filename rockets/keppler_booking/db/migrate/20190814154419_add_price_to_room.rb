class AddPriceToRoom < ActiveRecord::Migration[5.2]
  def change
    add_column :keppler_booking_rooms, :price, :string
  end
end

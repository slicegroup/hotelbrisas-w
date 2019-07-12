class CreateKepplerBookingOrders < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_orders do |t|
      t.integer :room_id
      t.integer :quantity_people
      t.integer :reservation_id
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end

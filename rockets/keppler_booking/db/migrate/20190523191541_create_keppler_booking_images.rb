class CreateKepplerBookingImages < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_images do |t|
      t.string :img
      t.integer :room_id
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end
